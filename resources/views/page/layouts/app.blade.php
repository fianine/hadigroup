<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT. Hadi Muda Berkarya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('/assets/frontend/img/logo-white.png') }}" type="image/png">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/style.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-md fixed-top white bg-gradient-1">
      <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('/assets/frontend/img/logo.png') }}" class="img-fluid logo" alt="Hadi Muda Berkarya"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link co-2" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link co-2" href="{{ url('about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link co-2" href="{{ url('company') }}">Company</a>
          </li>
          <li class="nav-item">
            <a class="nav-link co-2" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link co-2" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>

    @yield('content')

    <footer class="page-footer py-4 bg-gradient-3 text-white-50">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="img-footer-1">
              <img src="{{ asset('/assets/frontend/img/FooterCircle.png') }}">
            </div>
          </div>
          <div class="col-md-4">
            <div class="box-footer text-center">
              <img src="{{ asset('/assets/frontend/img/logo-white.png') }}" style="width: 100px">
              <br>
              <div class="socmed">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-4">
                      <a href="#"><i class="fa fa-facebook" style="color: #FFF;font-size: 50px"></i></a>
                    </div>
                    <div class="col-sm-4">
                      <a href="#"><i class="fa fa-envelope" style="color: #FFF;font-size: 50px"></i></a>
                    </div>
                    <div class="col-sm-4">
                      <a href="#"><i class="fa fa-instagram" style="color: #FFF;font-size: 50px"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <strong style="color: #FFF">Copyright &copy; Hadi Muda Berkarya</strong>
            </div>
          </div>
          <div class="col-md-4">
            <div class="img-footer-2 text-center">
              <img src="{{ asset('/assets/frontend/img/komputer.gif') }}">
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.5/fullpage.min.js"></script>
	  <script src="{{ asset('/assets/frontend/js/particle.js') }}"></script>
    <script src="{{ asset('/assets/frontend/js/fullpage.js') }}"></script>
  </body>
</html>
