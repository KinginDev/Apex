<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use JD\Cloudder\Facades\Cloudder;
use App\Category;
use App\Blog;
use App\BlogImage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::paginate(2);
     return  view('Admin.pages.blog.index')->withBlogs($blogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories  = Category::all();
       return view('Admin.pages.blog.create')->with(compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
             'title' => 'required',
             'images' => 'required',
             'tags' => 'required',
             'category' => 'required'
         ]);

         $blog = new Blog();

         $blog->title = $request->title;
         $blog->slug = str_slug($request->title, '-');
         $blog->tags = implode(',',$request->tags);
         $blog->category_id = $request->category;
         $blog->content = $request->content;
         $blog->save();

        //Images
         if($request->hasfile('images')){
             foreach( $request->file('images') as $image){
                $name = $image->getClientOriginalName();
                $image_name = $image->getRealPath();
                Cloudder::upload($image_name,null);
                list($width, $height) = getimagesize($image_name);
                
                $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
                //save to uploads directory
                 $image->move(public_path("uploads"), $name);
                 $this->saveImages($image,$image_url,$blog->id );
             }
             Session::flash('success', 'Blog Post Successfully Uploaded');
            return redirect()->back();
         }else{
             throw new \Exception('Error');
         }
        

        
    }
    public function saveImages($data, $image_url,$id){
        $image = new BlogImage();
        $image->blog_id = $id;
        $image->name = $data;
        $image->url = $image_url;
        $image->save();
        return true;
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
