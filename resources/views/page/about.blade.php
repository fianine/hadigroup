@extends('page.layouts.app')
@section('content')
  <div class="about-page">
    <img src="{{ asset('/assets/frontend/img/man.gif') }}" class="img-fluid" style="position: absolute;width: 320px">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
          <div class="about-title text-center">
            <h2> <strong>About Us</strong> </h2>
            <div class="bg-gradient-about"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="tsext-right">
          <img src="{{ asset('/assets/frontend/img/woman.png') }}" class="img-fluid" style="position: absolute;margin-top: 200px;right: 0">
        </div>
      </div>
    </div>
  </div>
  <div class="ourvision-page" style="margin-top: 200px;">
    <div class="bg-image-circle-4"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="{{ asset('/assets/frontend/img/about/our-vision.png') }}" class="img-fluid img-our-vision">
        </div>
        <div class="col-md-8">
          <div class="box-our-vision">
            <h2>Our Vision</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ourmision-page" style="margin-top: 100px;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2> Our Mission </h2>
          <div class="bg-our-mission"></div>
          <div class="box-mission">
            <div id="demo" class="carousel slide" data-ride="carousel">
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <p>1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="carousel-item">
                  <p>2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div class="carousel-item">
                  <p>3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
              </div>
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="ourcompany-page" style="margin-top: 100px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mx-auto">
            <h2 style="text-align: center">Our Companies</h2>
          </div>
        </div>
        <div class="col-md-3">
          <img src="{{ asset('/assets/frontend/img/about/hamuraPC.png') }}" class="img-fluid">
        </div>
        <div class="col-md-3">
          <img src="{{ asset('/assets/frontend/img/about/GMTPC.png') }}" class="img-fluid">
        </div>
        <div class="col-md-3">
          <img src="{{ asset('/assets/frontend/img/about/DidayaPC.png') }}" class="img-fluid">
        </div>
        <div class="col-md-3">
          <img src="{{ asset('/assets/frontend/img/about/BengkelHostPC.png') }}" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
@endsection
