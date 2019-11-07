@extends('page.layouts.app')
@section('content')
  <div class="page-one">
    <div id="particles-js"></div>
    <div class="row">
      <div class="col-md-6 bg-gradient-2">
        <div class="box-page-one">
          <h1>HADI</h1>
          <h1>MUDA</h1>
          <h1>BERKARYA</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        </div>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('/assets/frontend/img/page-one.gif') }}" class="img-fluid">
      </div>
    </div>
  </div>
  <div class="page-two">
    <div class="bg-image-circle"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ asset('/assets/frontend/img/about.gif') }}" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h1>About Us</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
          <a href="#" class="co-3">Read More <i class="fa fa-long-arrow-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
  <div class="page-three">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="company-header mx-auto">
            <h1 style="text-align: center">Our Companies</h1>
            <p style="text-align: center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="br-company"></div>
        <div class="col-md-3">
          <img class="img-center-page-three" src="{{ asset('/assets/frontend/img/hamura.png') }}">
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="#" class="text-center co-3" style="display: block;"> Read More <i class="fa fa-long-arrow-right"></i> </a>
        </div>
        <div class="col-md-3">
          <img class="img-center-page-three" src="{{ asset('/assets/frontend/img/gmt.png') }}">
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="#" class="text-center co-3" style="display: block;"> Read More <i class="fa fa-long-arrow-right"></i> </a>
        </div>
        <div class="col-md-3">
          <img class="img-center-page-three" src="{{ asset('/assets/frontend/img/didaya.png') }}">
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="#" class="text-center co-3" style="display: block;"> Read More <i class="fa fa-long-arrow-right"></i> </a>
        </div>
        <div class="col-md-3">
          <img class="img-center-page-three" src="{{ asset('/assets/frontend/img/bengkelhost.png') }}">
          <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <a href="#" class="text-center co-3" style="display: block;"> Read More <i class="fa fa-long-arrow-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
  <div class="page-four">
    <div class="bg-image-circle-2"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="company-header mx-auto">
            <h1 style="text-align: center">Blog</h1>
            <p style="text-align: center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-md-3 col-md-3-margin-bottom-blog">
          <div class="box-blog">
            <div class="thumbnail">
              <img src="{{ asset('/assets/frontend/img/blog/1.jpg') }}">
            </div>
            <div class="title-blog">
              <h6><strong>Lorem ipsum dolor sit amet</strong></h6>
            </div>
            <div class="desc-blog">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <a href="#" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
          </div>
        </div>
        <div class="col-md-3 col-md-3-margin-bottom-blog">
          <div class="box-blog">
            <div class="thumbnail">
              <img src="{{ asset('/assets/frontend/img/blog/2.jpg') }}">
            </div>
            <div class="title-blog">
              <h6><strong>Lorem ipsum dolor sit amet</strong></h6>
            </div>
            <div class="desc-blog">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <a href="#" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
          </div>
        </div>
        <div class="col-md-3 col-md-3-margin-bottom-blog">
          <div class="box-blog">
            <div class="thumbnail">
              <img src="{{ asset('/assets/frontend/img/blog/3.jpg') }}">
            </div>
            <div class="title-blog">
              <h6><strong>Lorem ipsum dolor sit amet</strong></h6>
            </div>
            <div class="desc-blog">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <a href="#" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
          </div>
        </div>
        <div class="col-md-3 col-md-3-margin-bottom-blog">
          <div class="box-blog">
            <div class="thumbnail">
              <img src="{{ asset('/assets/frontend/img/blog/4.jpg') }}">
            </div>
            <div class="title-blog">
              <h6><strong>Lorem ipsum dolor sit amet</strong></h6>
            </div>
            <div class="desc-blog">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            <a href="#" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-five">
    <div class="bg-image-page-five"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mx-auto">
            <h5 style="text-align: center">Daily Quotes</h5>
            <h2 style="text-align: center"> <strong>I Miss You My Self, I Love You My Self</strong> </h2>
            <h6 style="text-align: center">Bill Gates - 2019</h6>
          </div>
        </div>
      </div>
      <div class="circle-page-five">
        <img src="{{ asset('/assets/frontend/img/circle.png') }}">
      </div>
    </div>
  </div>
@endsection
