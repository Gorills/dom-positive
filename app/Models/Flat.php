<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
  
  protected $appends = ['link', 'linkPhone', 'priceformat', 'sqmround'];
  
  public function getLinkAttribute() {
    return route('flat.card', ['corps' => $this->building, 'section' => $this->section, 'flat' => $this->flatnumber]);
  }
  public function getLinkPhoneAttribute() {
    return route('phone_flat.card', ['corps' => $this->building, 'section' => $this->section, 'flat' => $this->flatnumber]);
  }
  
  public function getPriceFormatAttribute() {
    return number_format($this->price, 0, ',', ' ');
  }
  
  public function getSqmRoundAttribute() {
    return round($this->sqm);
  }
}
