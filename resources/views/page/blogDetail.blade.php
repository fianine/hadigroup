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
              <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
            </ol>
          </nav>
          <h2>{{ $blog->title }}</h2>
          <div class="info-author">
            <i class="fa fa-user"></i> <span> Admin </span>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <i class="fa fa-calendar"></i> <span> {{ date('d F Y', strtotime($blog->created_at)) }} </span>
          </div>
          <br>
          <img src="{{ asset('/upload/blog/'.$blog->image) }}" class="img-fluid">
          <hr>
          <?php echo $blog->content ?>
        </div>
        <div class="tag-blog">
          <h5>Tags</h5>
          <ul class="tags">
              @foreach (explode("," , $blog->tags) as $key => $dataa)
              	<li><a href="#" class="tag">{{ $dataa }}</a></li>
              @endforeach
          </ul>
        </div>
        <div class="recent-post">
          <h2>Recent Post</h2>
          <div class="row">
            @foreach ($blogdata as $key => $data)
            <div class="col-md-3 col-md-3-margin-bottom-blog">
              <div class="box-blog">
                <div class="thumbnail">
                  <img src="{{ asset('/upload/blog/'.$data->image) }}">
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
                  {{ substr($text, 0, $num_char) . '...' }}
                </div>
                <a href="{{ url('detail/'.Crypt::encryptString($data->id)) }}" class="co-3"> <strong>Read More</strong> <i class="fa fa-long-arrow-right"></i> </a>
              </div>
            </div>
            @endforeach
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="blog-header">
                <div class="mx-auto">
                  <h5 style="text-align: center">{{ $blogdata->links() }}</h5>
                </div>
                <hr>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
