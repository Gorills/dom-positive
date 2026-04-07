<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaStage extends Model
{
  protected $table = 'media_stage';
  
  public function getPictureAttribute() {
    return config('settings.pathes.stage') . $this->url;
  }
  
  public function getPreviewPictureAttribute() {
    $result = false;
    
    if($this->url) {
      $path_info = pathinfo(config('settings.pathes.stage') . $this->url);
      
      $preview = $path_info['filename'] . '_preview.' . $path_info['extension'];
  
      return config('settings.pathes.stage') . $preview;
    }
    
    return $result;
  }
}
