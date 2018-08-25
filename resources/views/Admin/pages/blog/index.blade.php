@extends('admin.layouts.app')


@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="This is My First Blog Post">
                        </div>
                         <div class="form-group">
                            <label for="">Images <small>(You can have more than one images'(s))</small></label>
                            <input type="file" name="images[]" class="form-control" multiple>
                        </div>
                        <div class="form-group">
                            <label for="">Categories</label>
                               <select name="category_id" id="" class="form-control">
                                 <option value="">Select A Category</option>
                                  @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                 @endforeach
                               </select>
                        </div>
                         <div class="form-group">
                            <label for="">Content</label>
                             <textarea  name="content" class="form-control" rows="9" cols="6"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-outline-primary btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection    