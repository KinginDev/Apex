@extends('Admin.layouts.main')


@section('content')
<div class="content">  
    <div class="container">
        
  
        <div class="row">
        	@foreach($blogs as $blog)
	            <div class="col-md-4">
	            	<div class="card card-chart">
		              <div class="card-header">
                          <h4 class="card-title">{{$blog->title}}</h4>
		                <h5 class="card-category">{{$blog->category->name}}</h5>
		              </div>
		              <div class="card-body">
		                <p>{{ strip_tags(substr($blog->content,0,100)) }} {{ strlen(strip_tags($blog->content)) > 100 ? ".....": ""}}</p>
		              </div>
		              <div class="card-footer">
		                <a href="{{route('show.blog', $blog->slug)}}" class="btn btn-primary">View Post</a>
		                <div class="stats pull-right">
		                  <i class="now-ui-icons arrows-1_refresh-69"></i>{{ date('M j, Y' ,strtotime($blog->updated_at)) }}
		                </div>
		              </div>
		            </div>
	            </div>
	            @endforeach
            
        </div>

		<center class="text-center">
		{{ $blogs->links() }}
		</center>
    </div>  
</div>

@endsection