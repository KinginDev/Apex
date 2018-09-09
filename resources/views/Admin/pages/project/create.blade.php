@extends('Admin.layouts.main')

@section('styles')
<style>
  .input-tags {
  width: 100%;
  padding: 15px;
  display: block;
  margin: 0 auto;
}
.bootstrap-tagsinput{
  width: 100% !important;
}

.label-info {
  background-color: #5bc0de;
  padding: 3px;
  width: 100% !important;
}
input#image{
  display: none;
}
.file-btn{
  width: auto;
  margin: 20px;
  height: auto;
  padding: 10px 15px;
  border: 1px solid #eee;
  outline: none;
  cursor: pointer;
}
.file-btn:hover{
  background: #efefefef;
  box-shadow: 1px 1px 2px #eee;
}
</style>
@endsection

@section('content')
<div class="content">
    <div class="container">
        <div class="12">
          @if (Session::has('success'))

              <div class="alert alert-success alert-dismissable">
                <strong>Success: {{Session::get('success') }}</strong>
              </div>

              @endif

              @if (count($errors) > 0)
                
                <div class="alert alert-danger">
                <strong>Errors:</strong>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </div>
              @endif
            <div class="card">
                <div class="card-body">
                    <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
                       @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" value="{{ old('title') }}" required  placeholder="Bow Dynamic Website">
                              @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                        </div>
                         <div class="form-group">
                            <label for="client">Client Name</label>
                            <input type="text" class="form-control {{ $errors->has('client') ? ' is-invalid' : '' }}" value="{{ old('client') }}" required  name="client" id="client" >
                              @if ($errors->has('client'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('client') }}</strong>
                                    </span>
                                @endif
                        </div>
                         <div class="form-group">
                          <label for="">Images <small>(You can have more than one images'(s))</small></label><br>
                            <label class="file-btn" for="image">Click to upload</label> <span class="text-primary" class="fileList">  </span>
                            <input type="file" name="images[]" multiple id="image" class="{{ $errors->has('images') ? ' is-invalid' : '' }}" value="{{ old('images') }}"   onchange="handleFiles(this.files)">
                              @if ($errors->has('images'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('images') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <label for="Tags">All Related Tags</label>
                            <input type="text" class="form-control {{ $errors->has('tags') ? ' is-invalid' : '' }}" value="{{ old('tags') }}" required  name="tags[]" id="tags" data-role="tagsinput" size="3">
                            @if ($errors->has('tags'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                                @endif
                        </div>
                         <div class="form-group">
                            <label for="tools">Tools / Technologies</label>
                            <input type="text" class="form-control {{ $errors->has('tools') ? ' is-invalid' : '' }}" value="{{ old('tools') }}" required  name="tools[]" id="tools" data-role="tagsinput" size="3">
                             @if ($errors->has('tools'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tools') }}</strong>
                                    </span>
                                @endif
                        </div>
                         <div class="form-group">
                            <label for="live_url">Live Url</label>
                            <input type="text" class="form-control {{ $errors->has('live_url') ? ' is-invalid' : '' }}" value="{{ old('tools') }}" required  name="live_url" id="live_url">
                             @if ($errors->has('live_url'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('live_url') }}</strong>
                                    </span>
                                @endif
                        </div>
                         <div class="form-group">
                            <label for="">Project Information</label>
                             <textarea name="project_info" class="form-control{{ $errors->has('project_info') ? ' is-invalid' : '' }}" value="{{ old('project_info') }}"   rows="9" cols="6"></textarea>
                              @if ($errors->has('project_info'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('project_info') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection    