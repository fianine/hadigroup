@extends('page.layouts.app')
@section('content')
  <div class="blog-page">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-header">
            <div class="mx-auto">
              <h2 style="text-align: center">Blog</h2>
              <div class="bg-gradient-blog"></div>
            </div>
            <hr>
          </div>
        </div>
        @foreach ($blog as $key => $data)
        <div class="col-md-4 col-md-3-margin-bottom-blog">
          <div class="box-blog">
            <div class="thumbnail">
              @if(file_exists( public_path().'/upload/blog/'.$data->image ))
                <img src="{{ asset('/upload/blog/'.$data->image) }}">
              @else
                <img src="{{ asset('/assets/frontend/img/blog/1.jpg') }}">
              @endif
            </div>
            <div class="title-blog">
              <h6><strong>{{ $data->title }}</strong></h6>
            </div>
            <div class="desc-blog">
              <?php
                $num_char = 100;
                $text = strip_tags($data->content);
                  if ($text{$num_char - 1} != ' ') {
                    $num_char = strpos($text, ' ', $num_char);
                  }
              ?>
              <p>{{ substr($text, 0, $num_char) . '...' }}</p>
            </div>
            <a href="{{ url('detail/'.$data->judulslug) }}" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
          </div>
        </div>
        @endforeach
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="blog-header">
            <div class="mx-auto">
              <h5 style="text-align: center">{{ $blog->links() }}</h5>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
