@extends('admin.layouts.app')
@section('content')
  <div class="row page-titles">
    <div class="col-md-5 align-self-center">
      <h3 class="text-themecolor">Dashboard</h3>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="javascript:void(0)">Home</a>
        </li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </div>
    <div class="col-md-7 align-self-center text-right d-none d-md-block">
      <button class="btn btn-info" type="button"><i class="fa fa-plus-circle"></i> Create New</button>
    </div>
  </div>
@endsection
