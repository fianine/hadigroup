<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible"><!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author"><!-- Favicon icon -->
	<link rel="shortcut icon" href="{{ asset('/assets/frontend/img/logo-white.png') }}" type="image/png">
	<title>Dashboard - PT. Hadi Muda Berkarya</title>
	<link href="{{ asset('/assets/backend/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/pages/dataTables.bootstrap4.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/pages/responsive.dataTables.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/pages/summernote.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/pages/dropify.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/pages/morris.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/pages/c3.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/pages/jquery.toast.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/pages/dashboard1.css') }}" rel="stylesheet">
	<link href="{{ asset('/assets/backend/css/colors/default.css') }}" id="theme" rel="stylesheet">
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="fix-header fix-sidebar card-no-border">
	<!-- ============================================================== -->
	<!-- Preloader - style you can find in spinners.css -->
	<!-- ============================================================== -->
	<div class="preloader">
		<div class="loader">
			<div class="loader__figure"></div>
			<p class="loader__label">Admin PT. Hadi Muda Berkarya</p>
		</div>
	</div><!-- ============================================================== -->
	<!-- Main wrapper - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<div id="main-wrapper">
		<!-- ============================================================== -->
		<!-- Topbar header - style you can find in pages.scss -->
		<!-- ============================================================== -->
		<header class="topbar">
			<nav class="navbar top-navbar navbar-expand-md navbar-light">
				<!-- ============================================================== -->
				<!-- Logo -->
				<!-- ============================================================== -->
				<div class="navbar-header">
					<a class="navbar-brand text-center" href="{{ url('admin/dashboard') }}"><!-- Logo icon --> <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
					 <!-- Dark Logo icon -->
					 <img style="width: 50%" alt="homepage" class="dark-logo img-fluid" src="{{ asset('/assets/frontend/img/logo.png') }}">
          </a>
				</div><!-- ============================================================== -->
				<!-- End Logo -->
				<!-- ============================================================== -->
				<div class="navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<!-- ============================================================== -->
						<!-- Messages -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle waves-effect waves-dark" data-toggle="dropdown" href="#" id="2"><i class="icon-Mail"></i>
							<div class="notify">
								<span class="heartbit"></span> <span class="point"></span>
							</div></a>
							<div aria-labelledby="2" class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown">
								<ul>
									<li>
										<div class="drop-title">
											You have 4 new messages
										</div>
									</li>
									<li>
										<div class="message-center">
											<!-- Message -->
											 <a href="#">
											<div class="user-img">
												<img alt="user" class="img-circle" src="https://wrappixel.com/demos/admin-templates/admin-wrap/assets/images/users/1.jpg"> <span class="profile-status online pull-right"></span>
											</div>
											<div class="mail-contnet">
												<h5>Pavan kumar</h5><span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
											</div></a> <!-- Message -->
											 <a href="#">
											<div class="user-img">
												<img alt="user" class="img-circle" src="https://wrappixel.com/demos/admin-templates/admin-wrap/assets/images/users/2.jpg"> <span class="profile-status busy pull-right"></span>
											</div>
											<div class="mail-contnet">
												<h5>Sonu Nigam</h5><span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
											</div></a> <!-- Message -->
											 <a href="#">
											<div class="user-img">
												<img alt="user" class="img-circle" src="https://wrappixel.com/demos/admin-templates/admin-wrap/assets/images/users/3.jpg"> <span class="profile-status away pull-right"></span>
											</div>
											<div class="mail-contnet">
												<h5>Arijit Sinh</h5><span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
											</div></a> <!-- Message -->
											 <a href="#">
											<div class="user-img">
												<img alt="user" class="img-circle" src="https://wrappixel.com/demos/admin-templates/admin-wrap/assets/images/users/4.jpg"> <span class="profile-status offline pull-right"></span>
											</div>
											<div class="mail-contnet">
												<h5>Pavan kumar</h5><span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
											</div></a>
										</div>
									</li>
									<li>
										<a class="nav-link text-center" href="javascript:void(0);"><strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i></a>
									</li>
								</ul>
							</div>
						</li><!-- ============================================================== -->
						<!-- End Messages -->
						<!-- ============================================================== --><!-- ============================================================== -->
						<!-- Profile -->
						<!-- ============================================================== -->
						<li class="nav-item dropdown u-pro">
							<a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" data-toggle="dropdown" href="#"><img alt="user" class="" src="https://wrappixel.com/demos/admin-templates/admin-wrap/assets/images/users/1.jpg"> <span class="hidden-md-down">{{ Auth::user()->name }} &nbsp;<i class="fa fa-angle-down"></i></span></a>
							<div class="dropdown-menu dropdown-menu-right animated flipInY">
								<ul class="dropdown-user">
									<li>
										<a href="#"><i class="ti-settings"></i> Account Setting</a>
									</li>
									<li class="divider" role="separator"></li>
									<li>
										<a href="#"><i class="fa fa-power-off"></i> Logout</a>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</header><!-- ============================================================== -->
		<!-- End Topbar header -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Left Sidebar - style you can find in sidebar.scss  -->
		<!-- ============================================================== -->
		<aside class="left-sidebar">
			<!-- Sidebar scroll-->
			<div class="scroll-sidebar">
				<!-- Sidebar navigation-->
				<nav class="sidebar-nav">
					<ul id="sidebarnav">
						<li class="nav-small-cap">&nbsp;&nbsp;&nbsp;MENU</li>
						<li>
							<a aria-expanded="false" class="waves-effect waves-dark" href="{{ url('admin/dashboard') }}"><i class="icon-Record"></i><span class="hide-menu">Dashboard</span></a>
						</li>
						<li>
							<a aria-expanded="false" class="has-arrow waves-effect waves-dark" href="#"><i class="icon-Record"></i><span class="hide-menu">Content</span></a>
							<ul aria-expanded="false" class="collapse">
								<li>
									<a href="{{ url('admin/content/header') }}">Header</a>
								</li>
								<li>
									<a href="{{ url('admin/content/social-media') }}">Social Media</a>
								</li>
							</ul>
						</li>
						<li>
							<a aria-expanded="false" class="has-arrow waves-effect waves-dark" href="#"><i class="icon-Record"></i><span class="hide-menu">About</span></a>
							<ul aria-expanded="false" class="collapse">
								<li>
									<a href="{{ url('admin/about') }}">About</a>
								</li>
								<li>
									<a href="{{ url('admin/about/vision') }}">Vision</a>
								</li>
								<li>
									<a href="{{ url('admin/about/mission') }}">Mision</a>
								</li>
							</ul>
						</li>
						<li>
							<a aria-expanded="false" class="waves-effect waves-dark" href="#"><i class="icon-Record"></i><span class="hide-menu">Company</span></a>
						</li>
            <li>
							<a aria-expanded="false" class="waves-effect waves-dark" href="#"><i class="icon-Record"></i><span class="hide-menu">Blog</span></a>
						</li>
						<li>
							<a aria-expanded="false" class="has-arrow waves-effect waves-dark" href="#"><i class="icon-Record"></i><span class="hide-menu">Mailbox <span class="label label-rounded label-success">25</span></span></a>
							<ul aria-expanded="false" class="collapse">
								<li>
									<a href="ui-cards.html">Inbox</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav><!-- End Sidebar navigation -->
			</div><!-- End Sidebar scroll-->
		</aside>
		<div class="page-wrapper">
			<div class="container-fluid">
				@yield('content')
			</div>
			<footer class="footer">
				© {{ date('Y') }} PT. Hadi Muda Berkarya
			</footer>
		</div>
	</div>

  <script src="{{ asset('/assets/backend/js/jquery.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/popper.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/summernote.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/dropify.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/waves.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/sidebarmenu.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/custom.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/raphael.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/morris.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/d3.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/c3.min.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/jquery.toast.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/dashboard1.js') }}"></script>
	<script src="{{ asset('/assets/backend/js/jQuery.style.switcher.js') }}"></script>

	<script type="text/javascript">
		$('#config-table').DataTable({
				responsive: true
		});
		$('.summernote').summernote({
				height: 350, // set editor height
				minHeight: null, // set minimum height of editor
				maxHeight: null, // set maximum height of editor
				focus: false // set focus to editable area after initializing summernote
		});
		$(function() {
			// Basic
			$('.dropify').dropify();
			// Translated
			$('.dropify-fr').dropify({
				messages: {
					default: 'Glissez-déposez un fichier ici ou cliquez',
					replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
					remove: 'Supprimer',
					error: 'Désolé, le fichier trop volumineux'
				}
			});
			// Used events
			var drEvent = $('#input-file-events').dropify();
			drEvent.on('dropify.beforeClear', function(event, element) {
				return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
			});
			drEvent.on('dropify.afterClear', function(event, element) {
				alert('File deleted');
			});
			drEvent.on('dropify.errors', function(event, element) {
				console.log('Has Errors');
			});
			var drDestroy = $('#input-file-to-destroy').dropify();
			drDestroy = drDestroy.data('dropify')
			$('#toggleDropify').on('click', function(e) {
				e.preventDefault();
				if (drDestroy.isDropified()) {
					drDestroy.destroy();
				} else {
					drDestroy.init();
				}
			})
		});
	</script>
</body>
</html>
