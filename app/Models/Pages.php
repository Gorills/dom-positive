<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
  public function variables()
  {
    return $this->hasMany('App\Models\Variables', 'page_id', 'id');
  }
}
