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
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form class="form" action="{{ url('admin/about') }}" method="post">
          @csrf
          <div class="card">
            <div class="card-body">
              <textarea name="about" class="summernote">{{ $about->about }}</textarea>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <textarea name="vission" class="summernote">{{ $about->vission }}</textarea>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">SAVE</button>
        </form>
      </div>
    </div>
  </div>
@endsection
