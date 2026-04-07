<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{ 
  public function getDates() {
      return ['created_at', 'updated_at', 'published_at'];
  }
  
  public function authorobj() {
    return $this->hasOne('App\User', 'id', 'author');
  }
  
  public function getPictureAttribute() {
    return config('settings.pathes.news') . $this->image;
  }
  
  public function getPreviewPictureAttribute() {
    $result = false;
    
    if($this->image) {
      $path_info = pathinfo(config('settings.pathes.news') . $this->image);
      
      $preview = $path_info['filename'] . '_preview.' . $path_info['extension'];
  
      return config('settings.pathes.news') . $preview;
    }
    
    return $result;
  }
}
