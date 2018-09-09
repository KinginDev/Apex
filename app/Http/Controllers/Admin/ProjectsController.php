<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Project;
use App\ProjectImage;
use JD\Cloudder\Facades\Cloudder;
use Session;

class ProjectsController extends Controller
{
    protected $pag_num;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->pag_num = 20;
        $projects = Project::with(['images'])->paginate($this->pag_num);
        return view('Admin.pages.project.index')->with(compact(['projects']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories  = Category::all();
        return view('Admin.pages.project.create')->with(compact(['categories']));
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
            'project_info' => 'required',
            'live_url' => 'required',
            'client' => 'required',
            'tools' => 'required',
            'tags' => 'required',
        ]);
        $project = new Project();
      //  dd($request);
        $project->project_info = $request->project_info;
        $project->live_url  = $request->live_url;
        $project->client = $request->client;
        $project->tools = implode(',',$request->tools);
        $project->tags = implode(',',$request->tags);

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
                 $this->saveImages($name,$image_url,$project->id );
             }
             Session::flash('success', 'Project Successfully Uploaded');
            return redirect()->back();
         }else{
             throw new \Exception('Error');
         }
    }
      public function saveImages($data, $image_url,$id){
        $image = new ProjectImage();
        $image->project_id = $id;
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
         Session::flash('success', 'Project with ID '.$id.' has been sucessfully deleted');
         return redirect()->back();
    }
}
