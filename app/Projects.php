<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function images(){
         $this->hasMany('App\ProjectImages');
    }
}
