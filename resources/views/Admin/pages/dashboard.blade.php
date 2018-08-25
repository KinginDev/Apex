@extends('admin.layouts.app')

@section('content')
    <div class="container">
       <div class="row">
           <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"><h3>Blog Post</h3></div>
                    <h4>15</h4>
                </div>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"><h3>Projects</h3></div>
                    <h4>15</h4>
                </div>
                
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title"><h3>Images</h3></div>
                    <h4>15</h4>
                </div>
                
            </div>
        </div>
       </div>
       <div class="col-md-12 give-margin-card-dash">
                  <div class="row">
                   <div class="col-md-6">

                       <div class="card ">
                          <div class="card-header"><h3 class="text-center">All Blog Posts</h3></div>
                           <div class="card-body">
                               <table class="table table-hover table-responsive">
                                   <thead>
                                       <tr>
                                           <th>Title</th>
                                           <th>Slug</th>
                                           <th>No of Views</th>
                                           <th>Images</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6">

                       <div class="card ">
                          <div class="card-header"><h3 class="text-center">All Projects</h3></div>
                           <div class="card-body">
                               <table class="table table-hover table-responsive">
                                   <thead>
                                       <tr>
                                           <th>Name</th>
                                           <th>Slug</th>
                                           <th>No of Views</th>
                                           <th>Images</th>
                                           <th>Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                           <td></td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
           </div>
       </div>
    </div>
@endsection