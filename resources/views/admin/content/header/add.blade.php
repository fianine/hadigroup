@extends('admin.layouts.app')
@section('content')
  <div class="container">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Content</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Home</a>
          </li>
          <li class="breadcrumb-item">Content</li>
          <li class="breadcrumb-item active">Header</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form class="form" action="{{ url('admin/content/header') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card">
            <div class="card-body">
              <textarea name="content" class="summernote">{{ $content->content }}</textarea>
            </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Upload Image</h4>
                  <label for="input-file-now-custom-3">You can combine options</label>
                  <input type="file" id="input-file-now-custom-3" class="dropify" data-default-file="{{ asset('/upload/content/'.$content->image) }}" data-height="500" name="file"/>
              </div>
          </div>
          <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
      </div>
    </div>
  </div>
@endsection
