<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Stylesheets -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

{{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon"> --}}

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
@stack('css')
<!-- Document Title
============================================= -->
@yield('title')
<title>Website SMKN 1 Situbondo</title>
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
						<div class="text"> SMKN 1 Situbondo - Jl. Baluran No.17, Kotakan Utara, Kotakan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68313</div>
					</div>
					<div class="right-box align-items-center d-flex">
						
						<!-- Social Box -->
						<ul class="header-social_box">
							<li><a href="https://www.facebook.com/OfficialPageSkansasiSitubondo/" class="fa-brands fa-facebook-f fa-fw"></a></li>
							<li><a href="https://www.tiktok.com/@skansasi.official"><i class="fa-brands fa-tiktok">Tiktok</i></a></li>
							<li><a href="https://www.youtube.com/channel/UCp1J6XcFGi-2sd-tmxlu12w" class="fa-brands fa-youtube fa-fw"></a></li>
							<li><a href="https://www.instagram.com/official.smkn1situbondo/?hl=id" class="fa-solid fa-instagram fa-fw"></a></li>
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
					<div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/images/logosmkbisa.png') }}" alt="" title=""></a></div>
					
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
									<li class="dropdown"><a href="{{ url('/') }}">Home</a>
										<ul>
											<li><a href="{{ url('berita') }}">Berita</a></li>
											<li><a href="{{ url('gallery') }}">Galeri</a></li>
											<li><a href="{{ url('media') }}">Video</a></li>
											{{-- <li><a href="index-4.html">Homepage Four</a></li> --}}
										</ul>
									</li>
									<li class="dropdown"><a href="#">Profil</a>
										<ul>
											<li><a href="{{ url('kepala') }}">Kepala Sekolah</a></li>
											<li><a href="{{ url('jurusan') }}">Kompetensi Keahlian</a></li>
											<li><a href="{{ url('achievement') }}">Prestasi Sekolah</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Data</a>
										<ul>
											<li><a href="{{ url('sarana') }}">Sarana & Prasarana</a></li>
											<li><a href="{{ url('gurusekolah') }}">Guru</a></li>
											<li><a href="{{ url('tenagapendidik') }}">Tenaga Pendidik</a></li>
											<li><a href="{{ url('siswasekolah') }}">Siswa</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Info</a>
										<ul>
											<li><a href="{{ url('ujianinfo') }}">Pengumuman</a></li>
											<li><a href="{{ url('agendasekolah') }}">Agenda Kegiatan</a></li>
											<li><a href="{{ url('jadwalmapel') }}">Jadwal Mata Pelajaran</a></li>
											<li><a href="{{ url('jadwalexam') }}">Jadwal Ujian</a></li>
											<li><a href="{{ url('ekskul') }}">Ekstrakurikuler</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">OSIS</a>
										<ul>
											<li><a href="{{ url('tentangosis') }}">Tentang OSIS</a></li>
											<li><a href="{{ url('pengurus') }}">Pengurus OSIS</a></li>
											<li><a href="{{ url('kegosis') }}">Kegiatan OSIS</a></li>
										</ul>
									</li>
									<li class="dropdown"><a href="#">Aplikasi</a>
                                    <ul>
                                        @php
                                            $links = App\Models\Aplikasi::all();
                                        @endphp
                                        @foreach ($links as $item)
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ $item->link }}" target="_blank">
                                                <div>{{$item->nama}}</div>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul></li>
									<li class="dropdown"><a href="#">PPDB</a>
                                    <ul>
                                        @php
                                            $links = App\Models\Ppdb::all();
                                        @endphp
                                        @foreach ($links as $item)
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ $item->link }}" target="_blank">
                                                <div>{{$item->nama}}</div>
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul></li>
									<li><a href="{{ url('infograduate') }}">Kelulusan</a></li>
									<li class="dropdown"><a href="#">Literasi</a>
										<ul>
											<li><a href="#">Buku Tamu</a></li>
											<li><a href="#">Daftar Buku</a></li>
											<li><a href="#}">Film</a></li>
											<li><a href="#">Sinopsis</a></li>
											<li><a href="#">Mading</a></li>
										</ul>
									</li>
									<li><a href="{{ url('pendapat.create') }}">Opini</a></li>
								</ul>
							</div>
							
						</nav>
						<!-- Main Menu End-->

						<div class="outer-box d-flex align-items-center">
							<!-- Search Btn -->
							{{-- <div class="search-box-btn search-box-outer"><span class="icon fa fa-search"></span></div>
							
							<!-- Nav Btn -->
							<div class="nav-btn navSidebar-button fa fa-solid fa-cart-plus fa-fw">
								<span>1</span>
							</div> --}}
							
							{{-- <!-- Button Box -->
							<div class="button-box style-two">
								<a class="btn-style-one theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">contact me</span>
										<span class="text-two">contact me</span>
									</div>
								</a>
							</div> --}}
							
							<!-- Mobile Navigation Toggler -->
							<div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>
							
						</div>
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
						<a href="{{ url('/') }}" title=""><img src="{{ asset('assets/images/logosmkbisa.png') }}" alt="" title=""></a>
					</div>
					
					<!-- Right Col -->
					<div class="right-box d-flex align-items-center flex-wrap">
						<!-- Main Menu -->
						<nav class="main-menu">
							<!--Keep This Empty / Menu will come through Javascript-->
						</nav>
						<!-- Main Menu End-->
						
						<div class="outer-box d-flex align-items-center">
												
							{{-- <!-- Nav Btn -->
							<div class="nav-btn navSidebar-button fa fa-solid fa-cart-plus fa-fw">
								<span>1</span>
							</div>
							
							<!-- Button Box -->
							<div class="button-box style-two">
								<a class="btn-style-one theme-btn btn-item" href="#">
									<div class="btn-wrap">
										<span class="text-one">contact me</span>
										<span class="text-two">contact me</span>
									</div>
								</a>
							</div> --}}
							
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
                <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('assets/images/logosmkbisa.png') }}" alt="" title=""></a></div>
				{{-- <!-- Search -->
				<div class="search-box">
					<form method="post" action="contact.html">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
							<button type="submit"><span class="icon flaticon-001-loupe"></span></button>
						</div>
					</form>
				</div> --}}
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
	
    </header>
    <!-- End Main Header -->
	
 <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap p-0 mb-4">
            @yield('content')
        </div>
    </section>

	<!-- Footer -->
	<footer class="main-footer" style="background-image:url({{ asset('assets/images/background/pattern-11.png') }})">
		<div class="auto-container">
			<!-- Widgets Section -->
			<div class="widgets-section">
				<div class="row clearfix">
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-12 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget logo-widget">
									<div class="logo">
										<a href="{{ url('/') }}"><img src="{{ asset('assets/images/smkbisafooter.png') }}" alt="" /></a>
									</div>
									<div class="text">SMKN 1 Situbondo</div>
									{{-- <a href="#" class="theme-btn about-btn">About us</a> --}}
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget newsletter-widget">
									<h4>Kontak Kami</h4>
									<div class="text">Silakan kontak kami melalui sosial media</div>
									
									<!-- Social Box -->
									<ul class="social-box">
										<li><a href="https://www.facebook.com/OfficialPageSkansasiSitubondo/" class="fa-brands fa-facebook-f fa-fw"> Facebook</a></li><br>
										<li><a href="https://www.youtube.com/channel/UCp1J6XcFGi-2sd-tmxlu12w" class="fa-brands fa-youtube fa-fw"> Youtube</a></li><br>
										<li><a href="https://www.instagram.com/official.smkn1situbondo/?hl=id" class="fa-solid fa-instagram fa-fw"> Instagram</a></li><br>
										<li><a href="https://www.tiktok.com/@skansasi.official"><i class="fa-brands fa-tiktok">Tiktok</i></a></li>
									</ul>
									<!-- End Social Box -->

								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
					<div class="big-column col-lg-6 col-md-6 col-sm-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget contact-widget">
									<h4>Official info:</h4>
									<ul class="contact-list">
										<li><span class="icon fa fa-address"></span> Jl. Baluran No.17, Kotakan Utara, Kotakan, Kec. Situbondo, Kabupaten Situbondo, Jawa Timur 68313</li>
										<li><span class="icon fa fa-phone"></span> 0338 - xxx </li>
									</ul>
									<div class="timing">
										<strong>Jam Aktif: </strong>
										Senin - Kamis: 07.00 - 15.00 WIB <br> Jumat: 06.30 - 11.10 WIB <br> Sabtu - Minggu: TUTUP
									</div>
								</div>
							</div>
							
							<!-- Footer Column -->
							{{-- <div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget instagram-widget">
									<h4>Gallery</h4>
									<div class="widget-content">
										<div class="images-outer clearfix">
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="{{ asset('assets/images/gallery/project-1.jpg') }}"><img src="{{ asset('assets/images/gallery/footer-gallery-thumb-1.jpg') }}" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="{{ asset('assets/images/gallery/project-2.jpg') }}"><img src="{{ asset('assets/images/gallery/footer-gallery-thumb-2.jpg') }}" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="{{ asset('assets/images/gallery/project-3.jpg') }}"><img src="{{ asset('assets/images/gallery/footer-gallery-thumb-3.jpg') }}" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="{{ asset('assets/images/gallery/project-4.jpg') }}"><img src="{{ asset('assets/images/gallery/footer-gallery-thumb-4.jpg') }}" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="{{ asset('assets/images/gallery/project-5.jpg') }}"><img src="{{ asset('assets/images/gallery/footer-gallery-thumb-5.jpg') }}" alt=""></a></figure>
											<!--Image Box-->
											<figure class="image-box"><a class="lightbox-image" href="{{ asset('assets/images/gallery/project-6.jpg') }}"><img src="{{ asset('assets/images/gallery/footer-gallery-thumb-6.jpg') }}" alt=""></a></figure>
										</div>
									</div>
								</div>
							</div> --}}
							
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="footer-bottom">
				<div class="copyright">2023 &copy; All rights reserved by <a href="#">@Mylin</a></div>
			</div>
			
		</div>
	</footer>
	<!-- Footer -->
	
	<!-- Search Popup -->
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
	<!-- End Search Popup -->
	
</div>
<!-- End PageWrapper -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>
</html>

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/odometer.js') }}"></script>
<script src="{{ asset('assets/js/nav-tool.js') }}"></script>
<script src="{{ asset('assets/js/mixitup.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>

<script src="{{ asset('assets/js/script.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('js')