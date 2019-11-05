<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PT. Hadi Muda Berkarya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/css/style.css') }}">
  </head>

  <body>

    <nav class="navbar navbar-expand-md fixed-top white bg-gradient-1">
      <a class="navbar-brand" href="#"> <img src="{{ asset('/assets/frontend/img/logo.png') }}" class="img-fluid logo" alt="Hadi Muda Berkarya"> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link co-1" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link co-2" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link co-2" href="#">Company</a>
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
