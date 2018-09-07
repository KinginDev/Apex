<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use DB;
class HomeController extends Controller
{
   

    /**
     * Show the application hoempage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        set_time_limit(0);
    	$blogs = Blog::with(['images','category'])->take(3)->get();
      
        return view('Frontend.pages.index')->with(compact(['blogs']));
    }

     public function getAllPosts($value='')
    {
    	$blogs = Blog::paginate(3);
    	return responnse()->json($blogs);
    }
}
