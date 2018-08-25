<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImages extends Model
{
    public function project(){
        $this->hasOne('App\Project');
    }
}
