<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class HomeController extends Controller
{
   

    /**
     * Show the application hoempage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$blogs = DB::table('projects')->skip(10)->take(5)->get();
        dd($blogs);
        return view('Frontend.pages.index');
    }

     public function getAllPosts($value='')
    {
    	$blogs = Blog::paginate(3);
    	return responnse()->json($blogs);
    }
}
