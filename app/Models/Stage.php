<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
  protected $table = 'stages';
  
  public function getDates() {
    return ['created_at', 'updated_at', 'published_at'];
  }
  
  public function media() {
    return $this->hasMany('App\Models\MediaStage', 'stage_id', 'id');
  }
  
  public function images() {
    return $this->hasMany('App\Models\MediaStage', 'stage_id', 'id')->where('type', 'image');
  }
  
  public function videos() {
    return $this->hasMany('App\Models\MediaStage', 'stage_id', 'id')->where('type', 'youtube');
  }
  
  public function authorobj() {
    return $this->hasOne('App\User', 'id', 'author');
  }
}
