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
          <li class="breadcrumb-item active">Mission</li>
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form class="form" action="{{ url('admin/about/mission/add') }}" method="post">
          @csrf
          <label for="ruangan">Mission <small class=""></small> </label>
          <div class="form-group">
              <div class="col-xs-4">
                  <input type="text" name="mission" class="form-control" placeholder="Mission" required>
              </div>
          </div>
          <div class="form-group">
              <div class="col-xs-6">
                  <input type="submit" class="btn btn-primary btn-flat" value="SAVE">
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
