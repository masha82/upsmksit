<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('css')
    <!-- Document Title
	============================================= -->
    @yield('title')
    <title>Info Kelulusan SMKN 1 Situbondo</title>

	<!-- Bootstrap -->
	<link href="{{ asset('asset-lulus/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('asset-lulus/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- NProgress -->
	<link href="{{ asset('asset-lulus/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
	<!-- iCheck -->
	<link href="{{ asset('asset-lulus/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="{{ asset('asset-lulus/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
	<!-- Select2 -->
	<link href="{{ asset('asset-lulus/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
	<!-- Switchery -->
	<link href="{{ asset('asset-lulus/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
	<!-- starrr -->
	<link href="{{ asset('asset-lulus/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="{{ asset('asset-lulus/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="{{ asset('asset-lulus/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Halaman Admin</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						{{-- <div class="profile_pic">
							<img src="images/img.jpg" alt="..." class="img-circle profile_img">
						</div> --}}
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>Admin Kelulusan SMKN 1 Situbondo</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>Admin</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{ route('graduate.create') }}">Tambah Data Kelulusan</a></li>
                                        <li><a href="{{ route('graduate.index') }}">Data Kelulusan Siswa</a></li>
										<li class="nav-item dropdown">
											<a class="nav-link" href="{{url('/import')}}">
												Import Data
											</a>
										</li>
										<li><a href="{{ route('graduate.waktu') }}">Countdown</a></li>
										{{-- <li><a href="form_validation.html">Form Validation</a></li>
										<li><a href="form_wizards.html">Form Wizard</a></li>
										<li><a href="form_upload.html">Form Upload</a></li>
										<li><a href="form_buttons.html">Form Buttons</a></li> --}}
									</ul>
								</li>
							</ul>
						</div>

					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					{{-- <div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div> --}}
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									Admin Kelulusan
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									{{-- <a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Settings</span>
									</a>
									<a class="dropdown-item" href="javascript:;">Help</a> --}}
									<a class="dropdown-item" href="href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"
                                     {{ __('Logout') }}>
                                     <i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          class="d-none">
                                        @csrf
                                    </form>
								</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						{{-- <div class="title_left">
							<h3>Form Data Kelulusan Siswa</h3>
						</div> --}}

						<div class="title_right">
							<div class="col-md-5 col-sm-5 form-group pull-right top_search">
								<div class="input-group">
								</div>
							</div>
						</div>
					</div>
<!-- Content
    ============================================= -->
    <section id="content">

        <div class="col-md-12 col-sm-12">
            @yield('content')
        </div>
    </section>

				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Mylinda - bootstrap
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>
</body>
</html>

<!-- jQuery -->
<script src="{{ asset('asset-lulus/vendors/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('asset-lulus/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('asset-lulus/vendors/fastclick/lib/fastclick.js') }}"></script>
<!-- NProgress -->
<script src="{{ asset('asset-lulus/vendors/nprogress/nprogress.js') }}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('asset-lulus/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('asset-lulus/vendors/iCheck/icheck.min.js') }}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{ asset('asset-lulus/vendors/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('asset-lulus/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{ asset('asset-lulus/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
<script src="{{ asset('asset-lulus/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
<script src="{{ asset('asset-lulus/vendors/google-code-prettify/src/prettify.js') }}"></script>
<!-- jQuery Tags Input -->
<script src="{{ asset('asset-lulus/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
<!-- Switchery -->
<script src="{{ asset('asset-lulus/vendors/switchery/dist/switchery.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('asset-lulus/vendors/select2/dist/js/select2.full.min.js') }}"></script>
<!-- Parsley -->
<script src="{{ asset('asset-lulus/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
<!-- Autosize -->
<script src="{{ asset('asset-lulus/vendors/autosize/dist/autosize.min.js') }}"></script>
<!-- jQuery autocomplete -->
<script src="{{ asset('asset-lulus/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') }}"></script>
<!-- starrr -->
<script src="{{ asset('asset-lulus/vendors/starrr/dist/starrr.js') }}"></script>
<!-- Custom Theme Scripts -->
<script src="{{ asset('asset-lulus/build/js/custom.min.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('js')