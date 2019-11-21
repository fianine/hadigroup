<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible"><!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author"><!-- Favicon icon -->
	<link rel="shortcut icon" href="{{ asset('/assets/frontend/img/logo-white.png') }}" type="image/png">
	<title>Login - PT. Hadi Muda Berkarya</title>
	<link href="{{ asset('/assets/backend/css/bootstrap.min.css') }}" rel="stylesheet"><!-- page css -->
	<link href="{{ asset('/assets/backend/css/pages/login-register-lock.css') }}" rel="stylesheet"><!-- Custom CSS -->
	<link href="{{ asset('/assets/backend/css/style.css') }}" rel="stylesheet"><!-- You can change the theme colors from here -->
	<link href="{{ asset('/assets/backend/css/colors/default.css') }}" id="theme" rel="stylesheet"><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="loader">
			<div class="loader__figure"></div>
			<p class="loader__label">Admin Hadi Muda</p>
		</div>
	</div><!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<section class="login-register login-sidebar" id="wrapper" style="background-image:url('{{ asset('/assets/backend/img/login-register.jpg') }}');">
		<div class="login-box card">
			<div class="card-body">
				<form action="{{ url('login') }}" method="post" class="form-horizontal form-material" id="loginform" name="loginform">
					@csrf
					<a class="text-center db" href="javascript:void(0)">
            <img alt="Home" src="{{ asset('/assets/frontend/img/logo.png') }}" class="img-fluid" style="width: 200px">
          </a>
					<div class="form-group m-t-40">
						<div class="col-xs-12">
							<input class="form-control" placeholder="Email" name="email" required="" type="text">
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<input class="form-control" placeholder="Password" name="password" required="" type="password">
						</div>
					</div>
					<div class="form-group text-center m-t-20">
						<div class="col-xs-12">
							<button class="btn btn-info btn-lg btn-block text-uppercase btn-rounded" type="submit">Log In</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section><!-- ============================================================== -->
	<!-- End Wrapper -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
	<script src="{{ asset('/assets/backend/js/jquery.min.js') }}"></script> <!-- Bootstrap tether Core JavaScript -->
	<script src="{{ asset('/assets/backend/js/popper.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/bootstrap.min.js') }}"></script> <!--Custom JavaScript -->
	<script type="text/javascript">
     $(function() {
         $(".preloader").fadeOut();
     });
	</script>
</body>
</html>
