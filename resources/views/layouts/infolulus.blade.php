<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
@stack('css')
    <!-- Document Title
	============================================= -->
    @yield('title')
    <title>Info Kelulusan SMKN 1 Situbondo</title>
<!-- Stylesheets -->
<link href="{{ asset('assets-info/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets-info/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets-info/css/responsive.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>

<body>
 
<div class="page-wrapper">
	
    <!-- Preloader -->
    <div class="preloader"></div>
	<!-- End Preloader -->
 	
 	<!-- Main Header / Header Style Three -->
    <header class="main-header header-style-three">
    	
		<!-- Header Top Three -->
		<div class="header-top_three">
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="left-box">
						<div class="text">Info Kelulusan SMKN 1 Situbondo</div>
					</div>
					<div class="right-box align-items-center d-flex">
						
						<!-- Social Box -->
						<ul class="header-social_box">
							<li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
							<li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
							<li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
							<li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
						</ul>
						
					</div>
				</div>
			</div>
		</div>
		<!-- End Header Top -->
		
		<!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
				<div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
					<!-- Logo Box -->
					<div class="logo"><a href="index.html"><img src="{{asset('assets-info/images/logosmkn-1.png') }}" alt="" title=""></a></div>
					
					<div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">
						
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="dropdown"><a href="#">Home</a>
										<ul>
											<li><a href="index.html">Homepage One</a></li>
											<li><a href="index-2.html">Homepage Two</a></li>
											</li>
										</ul>
									</li>
									<li><a href="about.html">About Us</a></li>
									<li class="dropdown"><a href="#">Services</a>
										<ul>
											<li><a href="services.html">Services</a></li>
											<li><a href="service-detail.html">Service Detail</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							
						</nav>
						<!-- Main Menu End-->
					</div>
					
				</div>
			</div>
		</div>
		
		<!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
				<div class="d-flex justify-content-between align-items-center">
					<!-- Logo -->
					<div class="logo">
						<a href="index.html" title=""><img src="images/logo.png" alt="" title=""></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<div class="outer-box d-flex align-items-center">
							
							<!-- Social Box -->
							<ul class="header-social_box-two">
								<li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
								<li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
								<li><a href="https://dribbble.com/" class="fa-solid fa-dribbble fa-fw"></a></li>
							</ul>
							
							<!-- Nav Btn -->
							<div class="nav-btn navSidebar-button fa fa-solid fa-cart-plus fa-fw">
								<span>1</span>
							</div>
							
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
							
						</div>
						
					</div>
					
				</div>
            </div>
        </div>
		<!-- End Sticky Menu -->
		
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-020-x-mark"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="images/logo.png" alt="" title=""></a></div>
				<!-- Search -->
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-001-loupe"></span></button>
						</div>
					</form>
				</div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->	
	
<!-- Content
    ============================================= -->
    <section id="content">

        <div class="col-md-12 col-sm-12">
            @yield('content')
        </div>
    </section>

	<!-- Footer -->
	<footer class="main-footer" style="background-image:url(images/background/pattern-11.png)">
			<div class="footer-bottom">
				<div class="copyright">2023 &copy; All rights reserved by <a href="#">Mylinda-bootstrap</a></div>
			</div>
			
		</div>
	</footer>
	<!-- Footer -->
	
	{{-- <!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="fa-solid fa-power-off fa-fw"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa-solid fa-paper-plane fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup --> --}}
	
</div>
<!-- End PageWrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<script src="{{ asset('assets-info/js/jquery.js') }}"></script>
<script src="{{ asset('assets-info/js/appear.js') }}"></script>
<script src="{{ asset('assets-info/js/owl.js') }}"></script>
<script src="{{ asset('assets-info/js/wow.js') }}"></script>
<script src="{{ asset('assets-info/js/odometer.js') }}"></script>
<script src="{{ asset('assets-info/js/nav-tool.js') }}"></script>
<script src="{{ asset('assets-info/js/mixitup.js') }}"></script>
<script src="{{ asset('assets-info/js/popper.min.js') }}"></script>
<script src="{{ asset('assets-info/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets-info/js/parallax-scroll.js') }}"></script>
<script src="{{ asset('assets-info/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets-info/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets-info/js/magnific-popup.min.js') }}"></script>

<script src="{{ asset('assets-info/js/script.js') }}"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>
</html>