@extends('layouts.master')

@section('title')
    <title>Website SMKN 1 Situbondo</title>
@endsection

@section('content')
	<!-- Main Slider Three -->
	<div class="main-slider-three">
		{{-- <div class="slider-three_icon-one" data-parallax='{"y" : -80}' style="background-image:url({{ asset('assets/images/icons/service-22.png') }})"></div>
		<div class="slider-three_icon-two" data-parallax='{"y" : 80}' style="background-image:url({{ asset('assets/images/icons/service-23.png') }})"></div> --}}
		<div class="single-item-carousel owl-carousel owl-theme">
			
			<!-- Slide -->
			<div class="slide">
				<div class="slider-three_image-layer" style="background-image:url({{ asset('assets/images/main-slider/halamanschool.jpg') }})"></div>
				<div class="slider-three_curve-layer" style="background-image:url({{ asset('assets/images/main-slider/curve.png') }})"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-three_content-box">
						<!-- About One Detail -->
						<h1 class="slider-three_title">Bergabunglah Bersama Kami</h1>
						<div class="slider-three_text">Solusi Tepat Menjawab Tantangan</div>
					</div>
				</div>
			</div>
			
			<!-- Slide -->
			{{-- <div class="slide">
				<div class="slider-three_image-layer" style="background-image:url({{ asset('assets/images/main-slider/3.jpg') }})"></div>
				<div class="slider-three_curve-layer" style="background-image:url({{ asset('assets/images/main-slider/curve.png') }})"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-three_content-box">
						<!-- About One Detail -->
						<a class="slider-three_play lightbox-video fa-solid fa-play fa-fw" href="https://www.youtube.com/watch?v=kxPCFljwJws">
							<i class="ripple"></i>
						</a>
						<h1 class="slider-three_title">Discover Our Proven <br> formula to get Success.</h1>
						<div class="slider-three_text">See, most new coaches get so busy marketing themselves.</div>
						<!-- Button Box -->
						<div class="slider-three_button-box text-center">
							<a class="btn-style-seven theme-btn" href="#">
								<div class="btn-wrap">
									<span class="text-one">get started</span>
									<span class="text-two">get started</span>
								</div>
							</a>
						</div>
					</div>
					
				</div>
			</div>
			 --}}
			<!-- Slide -->
			{{-- <div class="slide">
				<div class="slider-three_image-layer" style="background-image:url({{ asset('assets/images/main-slider/3.jpg') }})"></div>
				<div class="slider-three_curve-layer" style="background-image:url({{ asset('assets/images/main-slider/curve.png') }})"></div>
				<div class="auto-container">
					
					<!-- Content Column -->
					<div class="slider-three_content-box">
						<!-- About One Detail -->
						<a class="slider-three_play lightbox-video fa-solid fa-play fa-fw" href="https://www.youtube.com/watch?v=kxPCFljwJws">
							<i class="ripple"></i>
						</a>
						<h1 class="slider-three_title">Discover Our Proven <br> formula to get Success.</h1>
						<div class="slider-three_text">See, most new coaches get so busy marketing themselves.</div>
						<!-- Button Box -->
						<div class="slider-three_button-box text-center">
							<a class="btn-style-seven theme-btn" href="#">
								<div class="btn-wrap">
									<span class="text-one">get started</span>
									<span class="text-two">get started</span>
								</div>
							</a>
						</div>
					</div>
					
				</div>
			</div> --}}
			
		</div>
	</div>
	<!-- End Main Slider Three -->
	
	<!-- Services Three -->
	<section class="services-three">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Services Block Five -->
				<div class="service-block_five col-lg-3 col-md-6 col-sm-12">
					<div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_five-color-layer"></div>
						<div class="service-block_five_pattern" style="background-image:url({{ asset('assets/images/background/pattern-38.png') }})"></div>
						<div class="service-block_five_icon"><img src="{{ asset('assets/images/icons/service-18.png') }}" alt="" /></div>
						<h5 class="service-block_five_heading"><a href="{{ url('visidanmisi') }}">Visi dan Misi</a></h5>
						<div class="service-block_five-text">Visi dan Misi SMKN 1 Situbondo</div>
						<a href="{{ url('visidanmisi') }}" class="theme-btn service-block_five-more">Read more</a>
					</div>
				</div>
				
				<!-- Services Block Five -->
				<div class="service-block_five col-lg-3 col-md-6 col-sm-12">
					<div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_five-color-layer"></div>
						<div class="service-block_five_pattern" style="background-image:url({{ asset('assets/images/background/pattern-38.png') }})"></div>
						<div class="service-block_five_icon"><img src="{{ asset('assets/images/icons/service-19.png') }}" alt="" /></div>
						<h5 class="service-block_five_heading"><a href="{{ url('jurusan') }}">Kompetensi</a></h5>
						<div class="service-block_five-text">Kompetensi yang terdapat di SMKN 1 Situbondo</div>
						<a href="{{ url('jurusan') }}" class="theme-btn service-block_five-more">Read more</a>
					</div>
				</div>
				
				<!-- Services Block Five -->
				<div class="service-block_five col-lg-3 col-md-6 col-sm-12">
					<div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_five-color-layer"></div>
						<div class="service-block_five_pattern" style="background-image:url({{ asset('assets/images/background/pattern-38.png') }})"></div>
						<div class="service-block_five_icon"><img src="{{ asset('assets/images/icons/counter-1.png') }}" alt="" /></div>
						<h5 class="service-block_five_heading"><a href="{{ url('achievement') }}">Prestasi</a></h5>
						<div class="service-block_five-text">Prestasi yang diraih oleh SMKN 1 Situbondo</div>
						<a href="{{ url('achievement') }}" class="theme-btn service-block_five-more">Read more</a>
					</div>
				</div>
				
				<!-- Services Block Five -->
				<div class="service-block_five col-lg-3 col-md-6 col-sm-12">
					<div class="service-block_five-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="service-block_five-color-layer"></div>
						<div class="service-block_five_pattern" style="background-image:url({{ asset('assets/images/background/pattern-38.png') }})"></div>
						<div class="service-block_five_icon"><img src="{{ asset('assets/images/icons/service-21.png') }}" alt="" /></div>
						<h5 class="service-block_five_heading"><a href="{{ url('kepala') }}">Kepala Sekolah</a></h5>
						<div class="service-block_five-text">Mengenal Kepala SMKN 1 Situbondo</div>
						<a href="{{ url('kepala') }}" class="theme-btn service-block_five-more">Read more</a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Company One -->
	
	<!-- Company Three -->
	<section class="company-three">
		<div class="company-three_icon-one" data-parallax='{"y" : -80}' style="background-image:url({{ asset('assets/images/background/pattern-39.png') }})"></div>
		<div class="company-three_icon-two" data-parallax='{"y" : 80}' style="background-image:url({{ asset('assets/images/background/pattern-40.png') }})"></div>
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Image Column -->
				<div class="company-three_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="company-three_image-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="company-three_image">
							<img src="{{ asset('assets/images/logosmkn.png') }}" alt="" />
						</div>
					</div>
				</div>
				<!-- Content Column -->
				<div class="company-three_content-column col-lg-6 col-md-12 col-sm-12">
					<div class="company-three_inner">
						<div class="company-three_title">Tentang SMKN 1 Situbondo</div>
						<h2 class="company-three_heading"></h2>
						<div class="d-flex justify-content-between align-items-center flex-wrap">
							<div class="company-three_text">SEKOLAH MENENGAH KEJURUAN PILIHAN TEPAT MENJAWAB TANTANGAN</div>
							<ul class="company-three_reviews d-flex align-items-center flex-wrap">
								{{-- <li><img src="{{ asset('assets/images/resource/author-6.png') }}" alt="" /></li>
								<li><img src="{{ asset('assets/images/resource/author-7.png') }}" alt="" /></li>
								<li><img src="{{ asset('assets/images/resource/author-8.png') }}" alt="" /></li>
								<li><a class="reviews" href="#">Reviews</a></li> --}}
							</ul>
						</div>
						<!-- About One Detail -->
						{{-- <a class="about-three_play lightbox-video" href="https://www.youtube.com/watch?v=kxPCFljwJws">
							<span class="fa-solid fa-play fa-fw"><i class="ripple"></i></span>
							View How We work?
						</a> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Company Three -->
	
	<!-- CTA Two -->
	<section class="cta-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
		<div class="auto-container">
			<div class="cta-two_inner-container" style="background-image: url({{ asset('assets/images/background/map.png') }})">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					{{-- <div class="cta-two_author">
						<span class="cta-two_author-image"><img src="{{ asset('assets/images/resource/author-9.png') }}" alt="" /></span>
						Arnold Burner
						<i>Support Person</i>
					</div> --}}
					<div class="cta-two_title">Bergabunglah Bersama Kami <br><span> <h4>Solusi Tepat Menjawab Tantangan </h4></div>

					<!-- Button Box -->
					<div class="cta-two_button-box">
						<a class="btn-style-seven theme-btn" href="#">
							<div class="btn-wrap">
								<span class="text-one">Contact us!</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End CTA Two -->
	
	<!-- Case Two -->
	<section class="case-two">
		<div class="case-two_pattern" data-parallax='{"y" : 60}' style="background-image:url({{ asset('assets/images/icons/service-22.png') }})"></div>
		<div class="case-two_pattern-two" data-parallax='{"y" : 60}' style="background-image:url({{ asset('assets/images/icons/service-23.png') }})"></div>
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title_three light">
				<div class="sec-title_three-title">PROFIL</div>
				<h2 class="sec-title_three-heading">WAKIL KEPALA SEKOLAH</h2>
			</div>
			<div class="inner-container">
				<div class="case-carousel-two owl-carousel owl-theme">
					
					<!-- Case Block Two -->
					<div class="case-block-two">
						<div class="case-block_two-inner">
							<div class="case-block_two-image">
								<img src="{{ asset('assets/images/bapakguru.jpg') }}" alt="" />
								<div class="case-block_two-content">
									<div class="case-block_two-title">WAKA 1</div>
									<h4 class="case-block_two-title"><a href="#">Nama WAKA 1</a></h4>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Case Block Two -->
					<div class="case-block-two">
						<div class="case-block_two-inner">
							<div class="case-block_two-image">
								<img src="{{ asset('assets/images/ibuguru.jpg') }}" alt="" />
								<div class="case-block_two-content">
									<div class="case-block_two-title">WAKA 2</div>
									<h4 class="case-block_two-title"><a href="#">Nama WAKA 2</a></h4>
								</div>
							</div>
						</div>
					</div>
					
					<!-- Case Block Two -->
					<div class="case-block-two">
						<div class="case-block_two-inner">
							<div class="case-block_two-image">
								<img src="{{ asset('assets/images/bapakguru.jpg') }}" alt="" />
								<div class="case-block_two-content">
									<div class="case-block_two-title">WAKA 3</div>
									<h4 class="case-block_two-title"><a href="#">Nama WAKA 3</a></h4>
								</div>
							</div>
						</div>
					</div>

                    <!-- Case Block Two -->
					<div class="case-block-two">
						<div class="case-block_two-inner">
							<div class="case-block_two-image">
								<img src="{{ asset('assets/images/ibuguru.jpg') }}" alt="" />
								<div class="case-block_two-content">
									<div class="case-block_two-title">WAKA 4</div>
									<h4 class="case-block_two-title"><a href="#">Nama WAKA 4</a></h4>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- End Case Two -->

	{{-- <!-- Steps Two -->
	<section class="steps-two" style="background-image:url({{ asset('assets/images/background/6.jpg') }})">
		<div class="steps-two_pattern" data-parallax='{"y" : 60}' style="background-image:url({{ asset('assets/images/icons/service-23.png') }})"></div>
		<div class="steps-two_pattern-two" data-parallax='{"y" : 60}' style="background-image:url({{ asset('assets/images/icons/service-22.png') }})"></div>
		<div class="steps-two_pattern-three" style="background-image:url({{ asset('assets/images/background/pattern-41.png') }})"></div>
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title_three light centered">
				<div class="sec-title_three-title">Working Steps</div>
				<h2 class="sec-title_three-heading">Some <span>easy steps</span> to process!</h2>
			</div>
			<div class="inner-container">
				<div class="row clearfix">
				
					<!-- Step Block Two -->
					<div class="step-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="step-block_two-inner">
							<div class="step-block_two-number"><span class="icon fa-solid fa-check-double fa-fw"></span>01</div>
							<h4 class="step-block_two-heading">Select Service</h4>
							<div class="step-two_block-text">ITfirm is a design studio founded in London and expanded our multinational firm.</div>
						</div>
					</div>
					
					<!-- Step Block Two -->
					<div class="step-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="step-block_two-inner">
							<div class="step-block_two-number"><span class="icon fa-solid fa-pencil fa-fw"></span>02</div>
							<h4 class="step-block_two-heading">Send Message</h4>
							<div class="step-two_block-text">ITfirm is a design studio founded in London and expanded our multinational firm.</div>
						</div>
					</div>
					
					<!-- Step Block Two -->
					<div class="step-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="step-block_two-inner">
							<div class="step-block_two-number"><span class="icon fa-solid fa-cube fa-fw"></span>03</div>
							<h4 class="step-block_two-heading">Consult with us</h4>
							<div class="step-two_block-text">ITfirm is a design studio founded in London and expanded our multinational firm.</div>
						</div>
					</div>
					
					<!-- Step Block Two -->
					<div class="step-block_two col-lg-3 col-md-6 col-sm-12">
						<div class="step-block_two-inner">
							<div class="step-block_two-number"><span class="icon fa-solid fa-link fa-fw"></span>04</div>
							<h4 class="step-block_two-heading">Get in touch!</h4>
							<div class="step-two_block-text">ITfirm is a design studio founded in London and expanded our multinational firm.</div>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</section>
	<!-- End Steps Two --> --}}
	
	<!-- Services Four -->
	<section class="services-four">
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title_three centered">
				<div class="sec-title_three-title">GOTA</div>
				<h3 class="sec-title_three-heading">Gerakan Orang Tua Asuh</h3>
			</div>
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Service Block Six -->
					<div class="service-block_six col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_six-inner">
							<div class="service-block_six-content">
								<span class="service-block_six-icon">
									<img src="{{ asset('assets/images/icons/service-25.gif') }}" alt="" />
								</span>
								<h4 class="service-block_six-heading"><a href="#">Kegiatan GOTA</a></h4>
								{{-- <div class="service-block_six-text">Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt.</div> --}}
								<a class="service-block_six-more theme-btn" href="{{ url('gotakeg') }}">Lihat Selengkapnya</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block Six -->
					<div class="service-block_six col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_six-inner">
							<div class="service-block_six-content">
								<span class="service-block_six-icon">
									<img src="{{ asset('assets/images/icons/service-26.gif') }}" alt="" />
								</span>
								<h4 class="service-block_six-heading"><a href="#">Laporan Keuangan</a></h4>
								{{-- <div class="service-block_six-text">Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt.</div> --}}
								<a class="service-block_six-more theme-btn" href="{{ url('lapkeuangan') }}">Lihat Selengkapnya</a>
							</div>
						</div>
					</div>
					
					<!-- Service Block Six -->
					<div class="service-block_six col-lg-4 col-md-6 col-sm-12">
						<div class="service-block_six-inner">
							<div class="service-block_six-content">
								<span class="service-block_six-icon">
									<img src="{{ asset('assets/images/icons/service-27.gif') }}" alt="" />
								</span>
								<h4 class="service-block_six-heading"><a href="#">Donasi</a></h4>
								{{-- <div class="service-block_six-text">Lorem ipsum dolor sit amet, con sectetur adipiscing elit, sed do eiusmod tempor incididunt.</div> --}}
								<a class="service-block_six-more theme-btn" href="{{ url('donasi') }}">Lihat Selengkapnya</a>
							</div>
						</div>
					</div>					
				</div>
				
				{{-- <!-- Button Box -->
				<div class="services-four_button-box text-center">
					<a class="btn-style-seven theme-btn" href="#">
						<div class="btn-wrap">
							<span class="text-one">get started</span>
							<span class="text-two">get started</span>
						</div>
					</a>
				</div> --}}
				
			</div>
		</div>
	</section>
	<!-- End Services Four -->
	
	<!-- Contact One -->
	{{-- <section class="contact-one">
		<div class="contact-one_pattern" data-parallax='{"y" : 60}' style="background-image:url({{ asset('assets/images/background/pattern-42.png') }})"></div>
		<div class="contact-one_pattern-two" data-parallax='{"y" : -60}' style="background-image:url({{ asset('assets/images/background/pattern-43.png') }})"></div>
		<div class="auto-container">
			<!-- Sec Title Three -->
			<div class="sec-title_three">
				<div class="sec-title_three-title">Contact Us</div>
				<h2 class="sec-title_three-heading">It’s very easy to <span>contact</span> us</h2>
			</div>
			<div class="row clearfix">
				<!-- Form Column -->
				<div class="contact-one_form-column col-lg-6 col-md-12 col-sm-12">
					<div class="contact-one_form-inner">
						
						<!-- Default Form -->
						<div class="default-form">
							<form method="post" action="contact.html">
								<div class="row clearfix">
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Your Name" required="">
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12 form-group">
										<input type="text" name="username" placeholder="Web Address" required="">
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<input type="text" name="email" placeholder="Email Address" required="">
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<textarea class="" name="message" placeholder="Type Your Message"></textarea>
									</div>
									
									<div class="col-lg-12 col-md-12 col-sm-12 form-group">
										<!-- Button Box -->
										<div class="button-box">
											<button class="theme-btn btn-style-seven">
												<span class="btn-wrap">
													<span class="text-one">Send Message Now</span>
													<span class="text-two">Send Message Now</span>
												</span>
											</button>
										</div>
									</div>
									
								</div>
							</form>
						</div>
						<!-- End Default Form -->
						
					</div>
				</div>
				<!-- Form Column -->
				<div class="contact-one_info-column col-lg-6 col-md-12 col-sm-12">
					<div class="contact-one_info-inner">
						<div class="row clearfix">
							
							<!-- Contact One Info -->
							<div class="contact-one_info col-lg-6 col-md-6 col-sm-6">
								<div class="contact-one_info-outer">
									<span class="contact-one_info-icon fa-solid fa-phone fa-fw"></span>
									Call Us for help!
									<strong>+ (888) 452 1505</strong>
								</div>
							</div>
							
							<!-- Contact One Info -->
							<div class="contact-one_info col-lg-6 col-md-6 col-sm-6">
								<div class="contact-one_info-outer">
									<span class="contact-one_info-icon fa-solid fa-map fa-fw"></span>
									Our Locations
									<strong>30 Commercial Road, Australia</strong>
								</div>
							</div>
							
							<!-- Contact One Info -->
							<div class="contact-one_info col-lg-6 col-md-6 col-sm-6">
								<div class="contact-one_info-outer">
									<span class="contact-one_info-icon fa-solid fa-envelope fa-fw"></span>
									Our Mail Address
									<strong>help@gmail.com <br> envato@gmail.com</strong>
								</div>
							</div>
							
							<!-- Contact One Info -->
							<div class="contact-one_info col-lg-6 col-md-6 col-sm-6">
								<div class="contact-one_info-outer">
									<span class="contact-one_info-icon fa-solid fa-clock fa-fw"></span>
									Official Timing:
									<strong>Mon-Sat 9:00 - 7:00</strong>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- End Contact One -->
	
	<!-- Testimonial Two -->
	{{-- <section class="testimonial-two">
		<div class="testimonial-two_pattern" data-parallax='{"y" : 60}' style="background-image:url({{ asset('assets/images/background/pattern-44.png') }})"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="testimonial-two_image-column col-lg-6 col-md-12 col-sm-12">
					<div class="testimonial-two_image-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="testimonial-two_image">
							<img src="{{ asset('assets/images/resource/testimonial-1.png') }}" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Carousel Column -->
				<div class="testimonial-two_carousel-column col-lg-6 col-md-12 col-sm-12">
					<div class="testimonial-two_carousel-inner">
						<!-- Sec Title Three -->
						<div class="sec-title_three">
							<div class="sec-title_three-title">Testimonials</div>
							<h2 class="sec-title_three-heading">We have many good <br> <span>client’s</span> review</h2>
						</div>
						<div class="single-item-carousel owl-carousel owl-theme">
						
							<!-- Testimonial Block Two -->
							<div class="testimonial-block_two">
								<div class="testimonial-block_two-inner">
									<span class="testimonial-block_two-quote"><img src="images/icons/quote.png" alt="" /></span>
									<div class="testimonial-block_two-author">
										<img src="{{ asset('assets/images/resource/author-10.jpg') }}" alt="" />
									</div>
									<div class="testimonial-block_two-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</div>
									<div class="testimonial-block_two-author-name">Arnold Burner</div>
									<div class="testimonial-block_two-designation">Senior Developer</div>
								</div>
							</div>
							
							<!-- Testimonial Block Two -->
							<div class="testimonial-block_two">
								<div class="testimonial-block_two-inner">
									<span class="testimonial-block_two-quote"><img src="images/icons/quote.png" alt="" /></span>
									<div class="testimonial-block_two-author">
										<img src="{{ asset('assets/images/resource/author-10.jpg') }}" alt="" />
									</div>
									<div class="testimonial-block_two-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</div>
									<div class="testimonial-block_two-author-name">Arnold Burner</div>
									<div class="testimonial-block_two-designation">Senior Developer</div>
								</div>
							</div>
							
							<!-- Testimonial Block Two -->
							<div class="testimonial-block_two">
								<div class="testimonial-block_two-inner">
									<span class="testimonial-block_two-quote"><img src="images/icons/quote.png" alt="" /></span>
									<div class="testimonial-block_two-author">
										<img src="{{ asset('assets/images/resource/author-10.jpg') }}" alt="" />
									</div>
									<div class="testimonial-block_two-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidi dunt ut labore et dolore magna aliqua.</div>
									<div class="testimonial-block_two-author-name">Arnold Burner</div>
									<div class="testimonial-block_two-designation">Senior Developer</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section> --}}
	<!-- End Testimonial Two -->

@endsection

