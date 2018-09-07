<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App/Category;
use App\Project;
use App\ProjectImage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.pages.projects.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories  = Category::all();
        return view('Admin.pages.projects.index')->with(compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate([
        ]);
        $project = new Project();

        $project->project_info = $request->project_info
        $project->live_url  = $request->live_url;
        $project->client = $request->client;
        $project->tools = $request->tools;
        $project->tags = $request->tags;

        $project->save();
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
                 $this->saveImages($name,$image_url,$blog->id );
             }
             Session::flash('success', 'Project Successfully Uploaded');
            return redirect()->back();
         }else{
             throw new \Exception('Error');
         }
    }
      public function saveImages($data, $image_url,$id){
        $image = new ProjectImage();
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
        $project = Project::find($id);

        return view('Admin.pages.projects.edit')->with(compact('project'));
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
        $blog = Project::find($id)->delete();
         Session::flash('deleted', 'Project with ID '.$id.' has been sucessfully deleted');
         return redirect()->back();
    }
}
