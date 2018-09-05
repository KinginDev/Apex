<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogImage extends Model
{
    public function post(){
         $this->hasOne('App\Blog');
    }
}
