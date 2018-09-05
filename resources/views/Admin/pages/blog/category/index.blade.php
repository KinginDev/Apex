@extends('Admin.layouts.main')
@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h3> Categories</h3></div>
                    <div class="card-body">
                       @if(Session::has('deleted'))
                           <div class="alert alert-success">
                               <p>{{Session::get('deleted')}}</p>
                           </div>
                       @endif
                        <table class="table table-hover table-responsive">
                            <thead>
                                <tr>
                                   <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>No of Posts</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->slug}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                    <div class="dropdown">
                                              <a class=" dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               Actions
                                              </a>
                                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"  onclick="event.preventDefault(); document.getElementById('delete-cat').submit();">Delete</a>
                                                     <form id="delete-cat" action="{{route('category.destroy', $category->id)}}" method="post">
                                                         @method('DELETE')   
                                                         @csrf
                                                     </form>
                                                <a class="dropdown-item" href="#">Edit</a>
                                              </div>
                                            </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header"><h4>Create New Category</h4></div>
                    <div class="card-body">
                       @if(Session::has('success'))
                               <div class="alert alert-success">
                                   <p>{{Session::get('success')}} </p>
                               </div>
                         
                       @endif
                       @if(Session::has('error'))
                               <div class="alert alert-success">
                                   <p>{!! Session::get('error') !!} </p>
                               </div>
                         
                       @endif
                        <form action="{{route('category.store')}}" method="post">
                           @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"  value="{{ old('name') }}" required autofocus placeholder="Cloud Computing" name="name">
                             @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection