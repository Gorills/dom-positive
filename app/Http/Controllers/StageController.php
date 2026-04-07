<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;

use App\Http\Requests;

use App\Models\Stage;
use App\Models\MediaStage;

use Carbon\Carbon;
use File;
use Image;
use Validator;

class StageController extends Controller
{
  public function index(Authenticatable $me) { 
    return view('stage.create', ['me' => $me, 'now' => Carbon::now()->format('m/d/Y H:i')]);
  }
  
  public function create(Request $request, Authenticatable $me) {
    
    $rules = [
        'published_at' => 'required'
      ];
      
      $validation_messages = [
        'required'  => 'Поле :attribute должно быть заполнено'
      ];

      $validator = Validator::make($request->all(), $rules, $validation_messages); 
      if(!$validator->fails()) {
        $stage = new Stage;
        $stage->author = $me->id;
        $stage->title = $request->input('title');
        $stage->text = $request->input('text');
        $stage->published_at = $request->input('published_at') ? Carbon::createFromFormat('d.m.Y H:i', $request->input('published_at')) : Carbon::now();
        $stage->save();
        
        $images = $request->file('images');
        if($images) {
          foreach($images as $image) {
            $file_unique = dechex(time() + $stage->id + rand(1000000, 9999999));
            $filename  = $file_unique . '.' . $image->getClientOriginalExtension();
            $filename_preview  = $file_unique . '_preview.' . $image->getClientOriginalExtension();
            $path = public_path(config('settings.pathes.stage_save') . $filename);
            $path_preview = public_path(config('settings.pathes.stage_save') . $filename_preview);
          
            $save_mage = Image::make($image->getRealPath())->save($path);
            
            $save_mage_preview = Image::make($path)->resize(800, 800, function ($constraint) {$constraint->aspectRatio();})->save($path_preview);
            if($save_mage && $save_mage_preview) {
              $media = new MediaStage;
              $media->type = 'image';
              $media->url = $filename;
              
              $stage->media()->save($media);
            }  
          }
        }
        
        $youtube_videos = $request->get('videos');
        if($youtube_videos) {
          foreach($youtube_videos as $video) {
            if($video) {
              $media = new MediaStage;
              $media->type = 'youtube';
              $media->url = $video;
                
              $stage->media()->save($media); 
            }
          }
        }
        
        return redirect()->route('stage.index')->with('success', true);
        
      } else {
        return redirect()->route('stage.index')->with('errors', $validator->errors()->all());
      }
  }
  
  public function update(Request $request, Authenticatable $me, $stage_id) {
    
    $rules = [
        'published_at' => 'required'
      ];
      
      $validation_messages = [
        'required'  => 'Поле :attribute должно быть заполнено'
      ];

      $validator = Validator::make($request->all(), $rules, $validation_messages); 
      if(!$validator->fails()) {
        $stage = Stage::find($stage_id); 
          if($stage && $stage->id) { 
            $stage->author = $me->id;
            $stage->title = $request->input('title');
            $stage->text = $request->input('text');
            $stage->published_at = $request->input('published_at') ? Carbon::createFromFormat('d.m.Y H:i', $request->input('published_at')) : Carbon::now();
            $stage->save();
            
            $images = $request->file('images');
            if($images) {
              foreach($images as $image) {
                if($image) { 
                  $file_unique = dechex(time() + $stage->id + rand(1000000, 9999999));
                  $filename  = $file_unique . '.' . $image->getClientOriginalExtension();
                  $filename_preview  = $file_unique . '_preview.' . $image->getClientOriginalExtension();
                  $path = public_path(config('settings.pathes.stage_save') . $filename);
                  $path_preview = public_path(config('settings.pathes.stage_save') . $filename_preview);
                
                  $save_mage = Image::make($image->getRealPath())->save($path);
                  
                  $save_mage_preview = Image::make($path)->resize(800, 800, function ($constraint) {$constraint->aspectRatio();})->save($path_preview);
                  if($save_mage && $save_mage_preview) {
                    $media = new MediaStage;
                    $media->type = 'image';
                    $media->url = $filename;
                    
                    $stage->media()->save($media);
                  }
                }  
              }
            }
            
            $youtube_videos = $request->get('videos');
            if($youtube_videos) {
              MediaStage::where('stage_id', $stage->id)->where('type', 'youtube')->delete();
              foreach($youtube_videos as $video) {
                if($video) {
                  $media = new MediaStage;
                  $media->type = 'youtube';
                  $media->url = $video;
                    
                  $stage->media()->save($media); 
                }
              }
            }
            
          return redirect()->route('stage.editone', ['id' => $stage->id])->with('success', true);
        } else return redirect()->route('stage.edit')->with('errors', ['Не найдено новости с таким идентификатором']);  
        
      } else {
        return redirect()->route('stage.editone', ['id' => $stage->id])->with('errors', $validator->errors()->all());
      }
  }
  
  public function edit(Authenticatable $me) {
    return view('stage.edit', ['me' => $me, 'stages' => Stage::paginate(15)]);
  }
  
  public function editone(Authenticatable $me, $stage_id) { 
    $stage = Stage::find($stage_id);

    if(!$stage || !$stage->id) return redirect()->route('stage.edit')->with('errors', ['Не найдено информации о ходе строительства с таким идентификатором']);
    else {
      $videos = $stage->videos;

      $first_video_url = '';
      if(count($videos)) {
        $first_video_url = $videos->first()->url;

        $videos = $videos->slice(1);
      }
      return view('stage.editone', ['me' => $me, 'stage' => $stage, 'published_at' => $stage->published_at->format('m/d/Y H:i'), 'videos' => $videos, 'first_video_url' => $first_video_url]);
    }  
  }
  
  public function getImagesPathes($image) {
    $filename = $image;
    $path_info = pathinfo(public_path(config('settings.pathes.stage') . $image));
    
    $preview = $path_info['filename'] . '_preview.' . $path_info['extension'];
    
    $result = app()->make('stdClass');
    $result->original = public_path(config('settings.pathes.stage_save') . $image);
    $result->preview = public_path(config('settings.pathes.stage_save') . $preview);
    
    return $result;
  }
  
  public function media_delete(Request $request) {
    $result = false;
    $media = $request->input('media');
    if($media && count($media)) {
      foreach($media as $item) {
        $media_item = MediaStage::find($item);
        if($media_item && $media_item->id) {
          $images = self::getImagesPathes($media_item->url);

          File::delete($images->original);
          File::delete($images->preview);
          
          $result = $media_item->delete();
        }
      }
    }
    
    return response()->json(['result' => $result]);  
  }
  
  public function delete(Authenticatable $me, $stage_id) {
    $stage = Stage::find($stage_id);
    if(count($stage->images)) {
      foreach($stage->images as $image) {
        $images = self::getImagesPathes($image->url); 

        File::delete($images->original);
        File::delete($images->preview);
      }
    }
    if(!$stage || !$stage->id) return redirect()->route('stage.edit')->with('errors', ['Не найдено информации о ходе строительства с таким идентификатором']);
    if($stage->delete()) return redirect()->route('stage.edit')->with('success', 'Информация о ходе строительства #'. $stage_id .' успешно удалена');
  }
}
