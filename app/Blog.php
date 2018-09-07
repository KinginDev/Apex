<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

   public function images(){
         return $this->hasMany('App\BlogImage', 'blog_id');
    }
    public function category(){
       return  $this->belongsTo('App\Category');
    }
}
