<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogImages extends Model
{
    public function post(){
         $this->hasOne('App\Blog');
    }
}
