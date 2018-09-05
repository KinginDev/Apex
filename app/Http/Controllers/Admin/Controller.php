<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class Controller extends BaseController
{
   
    /**
    * Get The Admin Dashboard
    * @var 
    **/
    
    public function dashboard(){
        return view('Admin.pages.dashboard');
    }
}
