<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    public function post(){
         return $this->belongsTo('App\Blog');
    }
}
