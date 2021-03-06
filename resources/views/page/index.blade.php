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
          <p>{{ $content_header->content }}</p>
        </div>
      </div>
      <div class="col-md-6">
          <img src="{{ asset('/upload/content/'.$content_header->image) }}" />
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
          <p>{{ $about->vission }}</p>
          <a href="{{ url('about') }}" class="co-3">Read More <i class="fa fa-long-arrow-right"></i> </a>
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
            <p style="text-align: center">{{ $about->about }}</p>
          </div>
        </div>
        <div class="br-company"></div>
        @foreach ($company as $key => $value)
        <div class="col-md-3">
          <img class="img-center-page-three" src="{{ asset('/upload/company/logo/'.$value->company_logo) }}">
          <p class="text-center">{{ $value->company_name }}</p>
          <a href="{{ url('company#section'.$value->id) }}" class="text-center co-3" style="display: block;"> Read More <i class="fa fa-long-arrow-right"></i> </a>
        </div>
        @endforeach
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
          </div>
        </div>
        @foreach ($blog as $key => $value)
        <div class="col-md-3 col-md-3-margin-bottom-blog">
          <div class="box-blog">
            <div class="thumbnail">
              <img src="{{ asset('/upload/blog/'.$value->image) }}">
            </div>
            <div class="title-blog">
              <h6><strong>{{ $value->title }}</strong></h6>
            </div>
            <div class="desc-blog">
              <p>
              <?php
                $num_char = 100;
                $text = strip_tags($value->content);
                  if ($text{$num_char - 1} != ' ') {
                    $num_char = strpos($text, ' ', $num_char);
                  }
              ?>
              {{ substr($text, 0, $num_char) . '...' }}
              </p>
            </div>
            <a href="{{ url('detail/'.Crypt::encryptString($value->id)) }}" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
          </div>
        </div>
        @endforeach
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
            <h2 style="text-align: center;font-family: 'NunitoSans-BoldItalic'"> <strong>“You can’t connect the dots looking forward, you can only connect them looking backward. So you have to trust that the dots will somehow connect in your future.”</strong> </h2>
            <h6 style="text-align: center">Steve Jobs</h6>
          </div>
        </div>
      </div>
      <div class="circle-page-five">
        <img src="{{ asset('/assets/frontend/img/circle.png') }}">
      </div>
    </div>
  </div>
@endsection
