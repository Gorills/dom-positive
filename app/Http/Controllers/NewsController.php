<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Contracts\Auth\Authenticatable;

use App\Models\News;

use Carbon\Carbon;
use File;
use Image;
use Validator;

class NewsController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }
  
  public function index(Authenticatable $me) { 
    return view('news.create', ['me' => $me, 'now' => Carbon::now()->format('m/d/Y H:i')]);
  }
  
  public function create(Request $request, Authenticatable $me) {
    
    $rules = [
        'title' => 'required',
        'text' => 'required',
        'image' => 'image'
      ];
      
      $validation_messages = [
        'required'  => 'Поле :attribute должно быть заполнено',
        'image' => 'В качестве изображения к новости необходимо загружать только изображения'
      ];

      $validator = Validator::make($request->all(), $rules, $validation_messages); 
      if(!$validator->fails()) {
        $news = new News;
        if($request->file('image')) {
          $image = $request->file('image');
          $filename  = time() . '.' . $image->getClientOriginalExtension();
          $filename_preview  = time() . '_preview.' . $image->getClientOriginalExtension();
          $path = public_path(config('settings.pathes.news_save') . $filename);
          $path_preview = public_path(config('settings.pathes.news_save') . $filename_preview);
        
          $save_mage = Image::make($image->getRealPath())->save($path);
          
          $save_mage_preview = Image::make($path)->resize(800, 800, function ($constraint) {$constraint->aspectRatio();})->save($path_preview);
          if($save_mage && $save_mage_preview) $news->image = $filename;
        }
        
        $news->author = $me->id;
        $news->title = $request->input('title');
        $news->text = $request->input('text');
        $news->published_at = $request->input('published_at') ? Carbon::createFromFormat('d.m.Y H:i', $request->input('published_at')) : Carbon::now();
        $news->save();
        
        return redirect()->route('news.index')->with('success', true);
        
      } else {
        return redirect()->route('news.index')->with('errors', $validator->errors()->all());
      }
  }
  
  public function update(Request $request, Authenticatable $me, $news_id) {
    $rules = [
        'title' => 'required',
        'text' => 'required',
        'image' => 'image'
      ];
      
      $validation_messages = [
        'required'  => 'Поле :attribute должно быть заполнено',
        'image' => 'В качестве изображения к новости необходимо загружать только изображения'
      ];

      $validator = Validator::make($request->all(), $rules, $validation_messages); 
      if(!$validator->fails()) {
        $news = News::find($news_id);
        if($news && $news->id) {
          if($request->file('image')) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $filename_preview  = time() . '_preview.' . $image->getClientOriginalExtension();
            $path = public_path(config('settings.pathes.news_save') . $filename);
            $path_preview = public_path(config('settings.pathes.news_save') . $filename_preview);
          
            $save_mage = Image::make($image->getRealPath())->save($path);
            
            $save_mage_preview = Image::make($path)->resize(800, 800, function ($constraint) {$constraint->aspectRatio();})->save($path_preview);
            if($save_mage && $save_mage_preview) { 
              if($news->image) {
                $images = self::getImagesPathes($news->image);

                File::delete($images->original);
                File::delete($images->preview);
              }
              
              $news->image = $filename;
            }  
          }
          
          $news->author = $me->id;
          $news->title = $request->input('title');
          $news->text = $request->input('text'); 
          if($request->has('published_at')) $news->published_at = Carbon::createFromFormat('d.m.Y H:i', $request->input('published_at'));
          $news->save();
          
          return redirect()->route('news.edit')->with('success', 'Новость успешно отредактирована');
        } else return redirect()->route('news.edit')->with('errors', ['Не найдено новости с таким идентификатором']);
      } else {
        return redirect()->route('news.edit')->with('errors', $validator->errors()->all());
      }
  }
  
  public function edit(Authenticatable $me) {
    return view('news.edit', ['me' => $me, 'news' => News::orderBy('id', 'desc')->paginate(15)]);
  }
  
  public function editone(Authenticatable $me, $news_id) {
    $news = News::find($news_id);

    if(!$news || !$news->id) return redirect()->route('news.edit')->with('errors', ['Не найдено новости с таким идентификатором']);
    else return view('news.editone', ['me' => $me, 'news' => $news, 'published_at' => $news->published_at->format('m/d/Y H:i')]);
  }
  
  public function getImagesPathes($image) {
    $filename = $image;
    $path_info = pathinfo(public_path(config('settings.pathes.news') . $image));
    
    $preview = $path_info['filename'] . '_preview.' . $path_info['extension'];
    
    $result = app()->make('stdClass');
    $result->original = public_path(config('settings.pathes.news_save') . $image);
    $result->preview = public_path(config('settings.pathes.news_save') . $preview);
    
    return $result;
  }
  
  public function delete(Authenticatable $me, $news_id) {
    $news = News::find($news_id);
    if($news->image) {
      $images = self::getImagesPathes($news->image);

      File::delete($images->original);
      File::delete($images->preview);
    }
    if(!$news || !$news->id) return redirect()->route('news.edit')->with('errors', ['Не найдено новости с таким идентификатором']);
    if($news->delete()) return redirect()->route('news.edit')->with('success', 'Новость #'. $news_id .' успешно удалена');
  }
}