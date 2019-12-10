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
          <li class="breadcrumb-item active">Social Media</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form class="form" action="{{ url('admin/content/updatesosmed/1') }}" method="post">
          @csrf
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" value="{{ $sosmed->email }}">
              </div>
              <div class="form-group">
                <label>Instagram</label>
                <input type="text" name="instagram" class="form-control" value="{{ $sosmed->instagram }}">
              </div>
              <div class="form-group">
                <label>Facebook</label>
                <input type="text" name="facebook" class="form-control" value="{{ $sosmed->facebook }}">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
      </div>
    </div>
  </div>
@endsection
