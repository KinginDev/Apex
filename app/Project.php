<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function images(){
         $this->hasMany('App\ProjectImages');
    }
}
