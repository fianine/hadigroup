@extends('page.layouts.app')
@section('content')
  <div class="blog-detail-page">
    <div class="container">
      <div class="row">
        <div class="box-blog-detail">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Blog</a></li>
              <li class="breadcrumb-item active" aria-current="page">Lorem ipsum</li>
            </ol>
          </nav>
          <h2>Lorem ipsum dolor sit amet</h2>
          <div class="info-author">
            <i class="fa fa-user"></i> <span> Admin </span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-calendar"></i> <span> 7 September 2019 </span>
          </div>
          <br>
          <img src="{{ asset('/assets/frontend/img/blog-detail.png') }}" class="img-fluid">
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="tag-blog">
          <h5>Tags</h5>
          <ul class="tags">
            <li><a href="#" class="tag">Agency</a></li>
            <li><a href="#" class="tag">Project</a></li>
            <li><a href="#" class="tag">Web Development</a></li>
          </ul>
        </div>
        <div class="recent-post">
          <h2>Recent Post</h2>
          <div class="row">
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
                <a href="{{ url('detail') }}" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
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
                <a href="{{ url('detail') }}" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
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
                <a href="{{ url('detail') }}" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
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
                <a href="{{ url('detail') }}" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
