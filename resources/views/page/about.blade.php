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
            <p>{{ $about->about }}</p>
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
            <p>{{ $about->about }}</p>
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
                <?php $no=1; ?>
                @foreach ($about_mission as $key => $data)
                <?php $no++; ?>
                <li data-target="#demo" data-slide-to="{{ $no }}" <?php if($no=1){echo "class='active'";} ?>></li>
                @endforeach
              </ul>
              <div class="carousel-inner">
                @foreach ($about_mission as $key => $data)
                <div class="carousel-item <?php if($data->about_id == 1){echo "active";}?>">
                  <p>{{ $data->mission }}</p>
                </div>
                @endforeach
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
        @foreach($company as $key=>$value)
        <div class="col-md-3">
          <img src="{{ asset('/upload/company/logo/'.$value->company_logo) }}" class="img-fluid">
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
