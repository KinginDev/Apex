<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use JD\Cloudder\Facades\Cloudder;
use App\Category;
use App\Blog;
use App\BlogImage;
use Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return  view('Admin.pages.blog.index');
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
         $blog->tags = $request->tags;
         $blog->category = $request->category;
        
        //images
         if($request->hasfile('images')){
             foreach( $request->file('images') as $image){
                $name = time().'.'.$image->getClientOriginalExtension();
                $image_name = $image->getRealPath();
                $t = Storage::disk('s3')->put($name, file_get_contents($image), 'public');
                $image_url = Storage::disk('s3')->url($name);
                 dd($image_url);
//                Cloudder::upload($image_name,  array("timeout" => 200));
//                list($width, $height) = getimagesize($image_name);
//                
//                $image_url= Cloudder::show(Cloudder::getPublicId(), ["width" => $width, "height"=>$height]);
                //save to uploads directory
                 $image->move(public_path("uploads"), $name);
                 $this->saveImages($image,$image_url,$blog->id );
             }
             $blog->save();
            return redirect()->back()->with('status', 'Image Uploaded Successfully');
         }else{
             throw new \Exception('Error');
         }
        

        
    }
    public function saveImages($data,$id){
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
