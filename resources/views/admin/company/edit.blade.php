@extends('admin.layouts.app')
@section('content')
  <div class="container">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">About</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="javascript:void(0)">Home</a>
          </li>
          <li class="breadcrumb-item">About</li>
          <li class="breadcrumb-item active">Edit</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form class="form" action="{{ url('admin/company/edit/'.$company->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Company Name</label>
                <input type="text" name="company_name" class="form-control" required value="{{ $company->company_name }}">
              </div>
              <div class="form-group">
                <label>Website</label>
                <input type="text" name="company_link" class="form-control" required placeholder="http or https" value="{{ $company->company_link }}">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea required name="desc" class="summernote">{{ $company->desc }}</textarea>
              </div>
            </div>
          </div>
          <div class="card">
              <div class="card-body">
                  <h4 class="card-title">Upload Image</h4>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Logo</label>
                        <input type="file" id="input-file-now-custom-3" data-default-file="{{ asset('/upload/company/logo/'.$company->company_logo) }}" class="dropify" data-height="500" name="file_logo"/>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <label>Web Desktop</label>
                      <input type="file" id="input-file-now-custom-3" data-default-file="{{ asset('/upload/company/web/'.$company->company_web_image) }}" class="dropify" data-height="500" name="file_web"/>
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
