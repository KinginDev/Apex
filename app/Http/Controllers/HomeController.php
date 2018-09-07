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
    	$blogs = Blog::paginate(3);
        return view('Frontend.pages.index')->withBlogs($blogs);
    }

     public function getAllPosts($value='')
    {
    	$blogs = Blog::paginate(3);
    	return responnse()->json($blogs);
    }
}
