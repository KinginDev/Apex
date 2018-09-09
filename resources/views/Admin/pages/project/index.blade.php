@extends('Admin.layouts.main')


@section('content')
<div class="content"> 
   @if (Session::has('success'))

              <div class="alert alert-success alert-dismissable">
                <strong>Success: {{Session::get('success') }}</strong>
              </div>

              @endif
 
    <div class="container">
        <div class="row">
         
             
        @if(!$projects->isEmpty())
        	@foreach($projects as $project)
	            <div class="col-md-4">
	            	<div class="card card-chart">
		              <div class="card-header">
                          <h4 class="card-title">{{$project->title}}</h4>
		                <h5 class="card-category">{{$project->tags}}</h5>
		              </div>
		              <div class="card-body">
		                <p>{{ substr($project->project_info,0,50) }} {{ strlen($project->project_info) > 50 ? ".....": ""}}</p>
		              </div>
		              <div class="card-footer">
		                <a href="#" class="btn btn-primary">View Post</a>
		                <div class="stats pull-right">
		                  <i class="now-ui-icons arrows-1_refresh-69"></i>{{ date('M j, Y' ,strtotime($project->updated_at)) }}
		                </div>
		              
		                 <a  href="{{route('project.destroy',$project->id)}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('dddeer').submit();">
                                        Delete
                                    </a>

                                    <form id="dddeer" action="{{route('project.destroy',$project->id)}}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
		              </div>
		            </div>
	            </div>
	            @endforeach
	           @else
	           <div class="jumbotron col-md-9 offset-md-1" style="box-sahdow: 1px 1px 1px #eee;">
	               <h4 class="text-center">You dont have any project'(s) yet click button to create one</h4>
	               <center>
	                   <a href="{{route('project.create')}}" class="btn btn-primary">Create</a>
	               </center>
	           </div>
	           @endif
            
        </div>

		<div class="text-center">
		{{ $projects->links() }}
		</div>
    </div>  
</div>

@endsection