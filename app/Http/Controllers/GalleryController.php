<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Gallery;

use File;
use Image;
use Validator;

class GalleryController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }
  
  public function index(Authenticatable $me) {
    return view('gallery.create', ['me' => $me]);
  }
  
  public function edit(Authenticatable $me) {
    return view('gallery.edit', ['me' => $me, 'gallery' => Gallery::orderBy('order', 'asc')->paginate(15)]);
  }
  
  public function create(Request $request, Authenticatable $me) {
    
    $rules = [
        'image' => 'image'
      ];
      
      $validation_messages = [
        'image' => 'В качестве изображения необходимо загружать только изображения'
      ];

      $validator = Validator::make($request->all(), $rules, $validation_messages); 
      if(!$validator->fails()) {
        $gallery = new Gallery;
        $max_order = $gallery->max('order');

        if($request->file('image')) {
          $image = $request->file('image');
          $filename  = time() . '.' . $image->getClientOriginalExtension();
          $filename_preview  = time() . '_preview.' . $image->getClientOriginalExtension();
          $path = public_path(config('settings.pathes.gallery_save') . $filename);
          $path_preview = public_path(config('settings.pathes.gallery_save') . $filename_preview);
        
          $save_mage = Image::make($image->getRealPath())->save($path);
          
          $save_mage_preview = Image::make($path)->resize(150, null, function ($constraint) {$constraint->aspectRatio();})->save($path_preview);
          if($save_mage && $save_mage_preview) $gallery->image = $filename;
        }
        
        $gallery->author = $me->id;
        $gallery->order = $max_order++;
        $gallery->save();
        
        return redirect()->route('gallery.index')->with('success', true);
        
      } else {
        return redirect()->route('gallery.index')->with('errors', $validator->errors()->all());
      }
  }
  
  public function getImagesPathes($image) {
    $filename = $image;
    $path_info = pathinfo(public_path(config('settings.pathes.gallery_save') . $image));
    
    $preview = $path_info['filename'] . '_preview.' . $path_info['extension'];
    
    $result = app()->make('stdClass');
    $result->original = public_path(config('settings.pathes.gallery_save') . $image);
    $result->preview = public_path(config('settings.pathes.gallery_save') . $preview);
    
    return $result;
  }
  
  public function delete(Authenticatable $me, $gallery_id) {
    $gallery = Gallery::find($gallery_id);
    if($gallery->image) {
      $images = self::getImagesPathes($gallery->image);

      File::delete($images->original);
      File::delete($images->preview);
    }
    if(!$gallery || !$gallery->id) return redirect()->route('gallery.edit')->with('errors', ['Не найдено изображения с таким идентификатором']);
    if($gallery->delete()) return redirect()->route('gallery.edit')->with('success', 'Изображение #'. $gallery_id .' успешно удалено');
  }
  
  public function editone(Authenticatable $me, $gallery_id) {
    $gallery = Gallery::find($gallery_id);

    if(!$gallery || !$gallery->id) return redirect()->route('gallery.edit')->with('errors', ['Не найдено изображения с таким идентификатором']);
    else return view('gallery.editone', ['me' => $me, 'gallery' => $gallery]);
  }
  
  public function order(Request $request, Authenticatable $me) {
    $image_order = $request->input('order');
    if(count($image_order)) {
      foreach($image_order as $order => $image_id) {
        $image = Gallery::find($image_id);
        $image->order = $order;
        $image->save();
      }
    }
  }
  
  public function update(Request $request, Authenticatable $me, $gallery_id) {
    $rules = [
        'image' => 'image'
    ];
      
    $validation_messages = [
      'image' => 'В качестве изображения необходимо загружать только изображения'
    ];

    $validator = Validator::make($request->all(), $rules, $validation_messages); 
    if(!$validator->fails()) {
      $gallery = Gallery::find($gallery_id);
      if($gallery && $gallery->id) {
        if($request->file('image')) {
          $image = $request->file('image');
          $filename  = time() . '.' . $image->getClientOriginalExtension();
          $filename_preview  = time() . '_preview.' . $image->getClientOriginalExtension();
          $path = public_path(config('settings.pathes.gallery_save') . $filename);
          $path_preview = public_path(config('settings.pathes.gallery_save') . $filename_preview);
        
          $save_mage = Image::make($image->getRealPath())->save($path);
          
          $save_mage_preview = Image::make($path)->resize(150, null, function ($constraint) {$constraint->aspectRatio();})->save($path_preview);
          if($save_mage && $save_mage_preview) { 
            if($gallery->image) {
              $images = self::getImagesPathes($gallery->image);

              File::delete($images->original);
              File::delete($images->preview);
            }
            
            $gallery->image = $filename;
          }  
        }
        
        $gallery->author = $me->id;
        $gallery->save();
        
        return redirect()->route('gallery.edit')->with('success', 'Изображение успешно отредактировано');
      } else return redirect()->route('gallery.edit')->with('errors', ['Не найдено изображения с таким идентификатором']);
    } else {
      return redirect()->route('gallery.edit')->with('errors', $validator->errors()->all());
    }
  }
}
