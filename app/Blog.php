<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   
   public function images(){
         $this->hasMany('App\BlogImages');
    }
    public function category(){
         $this->hasOne('App\Category');
    }
}
