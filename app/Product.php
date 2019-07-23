<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cat;
use App\Brand;

class Product extends Model
{
    public function cat() {
    return $this -> belongsTo(Cat::class);
  }
  public function brand(){
  	return $this->belongsTo(Brand::class);
  }



}
