<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
   protected $with = ['category','images'];

   public function images(){
         return $this->hasMany('App\BlogImages', 'blog_id');
    }
    public function category(){
       return  $this->belongsTo('App\Category');
    }
}
