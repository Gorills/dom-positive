<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  public function authorobj() {
    return $this->hasOne('App\User', 'id', 'author');
  }
  
  public function getPictureAttribute() {
    return config('settings.pathes.gallery') . $this->image;
  } 
  
  public function getPreviewPictureAttribute() {
    $result = false;
    
    if($this->image) {
      $path_info = pathinfo(config('settings.pathes.gallery') . $this->image);
      
      $preview = $path_info['filename'] . '_preview.' . $path_info['extension'];
  
      return config('settings.pathes.gallery') . $preview;
    }
    
    return $result;
  }
}
