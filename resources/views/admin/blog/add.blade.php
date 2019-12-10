@extends('admin.layouts.app')
@section('content')
  <div class="container">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Blog</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Home</a>
          </li>
          <li class="breadcrumb-item">Blog</li>
          <li class="breadcrumb-item active">Add</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        @if(count($errors) > 0)
        <div class="alert alert-danger">
          @foreach ($errors->all() as $error)
          {{ $error }} <br/>
          @endforeach
        </div>
        @endif
        <form class="form" action="{{ url('admin/blog/add') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Blog title</label>
                <input type="text" name="title" class="form-control" required>
              </div>
              <div class="form-group">
                <label>Content</label>
                <textarea required name="content" class="summernote"></textarea>
              </div>
              <div class="form-group">
                <label for="city_tag">Blog tags (press enter if you after fixed tags)</label>
                <input type="text" name="tags" data-role="tagsinput" class="form-control" size="100" required>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
                <h4 class="card-title">Upload Image</h4>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Logo blog</label>
                      <input type="file" id="input-file-now-custom-3" class="dropify" data-height="500" name="file_logo_blog" required/>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
      </div>
    </div>
  </div>
@endsection
