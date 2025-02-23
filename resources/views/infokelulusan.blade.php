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
							
							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<ul class="navigation clearfix">
									<li class="dropdown"><a href="{{ url('infograduate') }}">Beranda</a>
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
					</div>
					
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
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
	
@push('css')
<style>
    .img-fit {
        display: block;
        max-height: 100px;
        width: auto;
        height: auto;
        object-fit: cover !important;
    }
</style>
@endpush

<!-- Service Two -->
<section class="service-two">
    <div class="auto-container">
        <!-- Sec Title -->
        <div class="sec-title centered">
            <h2 class="sec-title_heading">PENGUMUMAN KELULUSAN</h2><br>
            <div class="sec-title_title">SMKN 1 Situbondo</div><br>
            <div class="sec-title_title">Tahun Pelajaran {!! $data->thn_ajaran !!} </div>
        </div>
    		<form>				
				<table class="table table-bordered table-responsive table-hover ">
					<tr class="">
						<td colspan="2" class="text text-center "><label class=" navmenu-text">Data Siswa</label></td>
					</tr>

					<tr>
						<td>Nomor Ujian</td>
						<td>{!! $data->no_peserta !!}</td>
					</tr>
					<tr>
						<td>Nama Siswa</td>
						<td>{!! $data->namasiswa !!}</td>
					</tr>
					<tr>
						<td>Tempat Tanggal Lahir</td>
						<td>{!! $data->ttl !!}</td>
					</tr>
					<tr>
						<td>Kelas</td>
						<td>{!! $data->kelas !!}</td>
					</tr>
					<tr>
						<td>Kompetensi Keahlian</td>
						<td>{!! $data->jurusan !!}</td>
					</tr>
				</table>
			  </div>
			</div>
		  </div>
    </div>
</form>
	<div class="sec-title centered">
		<div class="row">
			<div class="card bg-success text-white">
			<h3>SELAMAT! <br> Anda dinyatakan LULUS</h2><br>
			</div>
		</div>
	</div>
		{{-- <div class="sec-title centered">
			@if($data->status == 'LULUS')
			<div class="row">
			<div class="card bg-success text-white">
			<h3>SELAMAT! <br> Anda dinyatakan LULUS</h2><br>
			</div>
			</div>
			@elseif($data->status == "TIDAK LULUS")		
			<div class="card bg-danger text-white">
			<h3>MAAF! <br> Anda dinyatakan TIDAK LULUS</h2><br>
			</div>
				@endif
		</div> --}}
</section>

</section>
<!-- End Company Three -->

<!-- Footer -->
<footer class="main-footer" style="background-image:url(images/background/pattern-11.png)">
    <div class="footer-bottom">
        <div class="copyright">2023 &copy; All rights reserved by <a href="#">Mylinda-bootstrap</a></div>
    </div>
    
</div>
</footer>
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