<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content="SemiColonWeb"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Stylesheets
    ============================================= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="summernote-bs5.css" rel="stylesheet">

    <!-- Date & Time Picker CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Kindergarten Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/kindergarten.css') }}" type="text/css"/>
    <!-- Kindergarten Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/demos/kindergarten/css/fonts.css') }}" type="text/css"/>
    <!-- Kindergarten Custom Fonts -->
    <!-- / -->

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="stylesheet" href="css/colors.php?color=6953A8" type="text/css"/>
    
    @stack('css')
    <!-- Document Title
	============================================= -->
    @yield('title')
    <title>Website SMKN 1 Situbondo</title>

</head>

<body class="stretched">

<div class="modal-on-load" data-target="#myModal1"></div>

<!-- Document Wrapper
	============================================= -->
<div id="wrapper" class="clearfix">
    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header">
        <div id="header-wrap">
            <div class="container">
                <div class="header-row justify-content-lg-between">

                    <!-- Logo
                    ============================================= -->
                    <div id="logo" class="me-lg-0 col-lg-2">
                        <a href="index.html" class="standard-logo"><img src="{{asset('logosmkn.png')}}"
                                                                        style="height: 20px!important;"></a>
                        <a href="index.html" class="retina-logo"><img src="{{asset('logosmkn.png')}}"
                                                                      style="height: 20px!important; "></a>
                    </div><!-- #logo end -->


                    <div id="primary-menu-trigger">
                        <svg class="svg-trigger" viewBox="0 0 100 100">
                            <path
                                d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                            <path d="m 30,50 h 40"></path>
                            <path
                                d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                        </svg>
                    </div>
                    <nav class="primary-menu">
                        <ul class="menu-container">
                            @guest
                                <li class="menu-item"><a class="menu-link" href="{{ url('/') }}">
                                        <div>BERANDA</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('berita') }}">
                                                <div>BERITA</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('gallery') }}">
                                                <div>GALERI</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('media') }}">
                                                <div>VIDEO</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>PROFIL</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('tentangsekolah') }}">
                                                <div>TENTANG SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('visidanmisi') }}">
                                                <div>VISI DAN MISI</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('kepala') }}">
                                                <div>KEPALA SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('pejabat') }}">
                                                <div>WAKIL KEPALA SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('jurusan') }}">
                                                <div>KOMPETENSI KEAHLIAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('achievement') }}">
                                                <div>PRESTASI SEKOLAH</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>DATA</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('sarana') }}">
                                                <div>SARPRAS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('gurusekolah') }}">
                                                <div>GURU</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('tenagapendidik') }}">
                                                <div>TENAGA PENDIDIK</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('siswasekolah') }}">
                                                <div>SISWA</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>INFO</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('infosekolah') }}">
                                                <div>PENGUMUMAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('agendasekolah') }}">
                                                <div>AGENDA KEGIATAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('jadwalmapel') }}">
                                                <div>JADWAL PELAJARAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('jadwalexam') }}">
                                                <div>JADWAL UJIAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('ekskul') }}">
                                                <div>EKSTRAKURIKULER</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>OSIS</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('tentangosis') }}">
                                                <div>TENTANG OSIS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('pengurus') }}">
                                                <div>PENGURUS OSIS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('kegosis') }}">
                                                <div>TENTANG KEGIATAN</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>APLIKASI</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
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
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>PPDB</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
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
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('infograduate') }}">
                                    <div>KELULUSAN</div>
                                </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('infograduate') }}">
                                    <div>LITERASI</div>
                                </a>
                                <ul class="sub-menu-container" style="">
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('guestbook.create') }}">
                                            <div>Buku Tamu</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('infobuku') }}">
                                            <div>Daftar Buku</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('infofilm') }}">
                                            <div>Film</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('infosinopsis') }}">
                                            <div>Sinopsis</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('infomading') }}">
                                            <div>Mading</div>
                                        </a>
                                    </li>
                                </ul>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="{{ url('pendapat.create') }}">
                                        <div>OPINI</div>
                                    </a>
                                </li>
                                {{-- <li class="menu-item">
                                    <a class="menu-link" href="{{ url('#') }}">
                                    <div>Others</div>
                                </a>
                                <ul class="sub-menu-container" style="">
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('#') }}">
                                            <div>Literasi</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('pendapat.create') }}">
                                            <div>OPINI</div>
                                        </a>
                                    </li>
                                </ul>
                                </li> --}}
                                {{--<li class="menu-item"><a class="menu-link" href="{{ route('pendapat.create') }}">
                                        <div>OPINI</div>
                                    </a>
                                    {{-- <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('pendapat') }}">
                                                <div>OPINI GURU</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ url('pendapat') }}">
                                                <div>OPINI SISWA</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li> --}}
                            @endguest
                            @auth
                                <li class="menu-item"><a class="menu-link" href="{{ url('/') }}">
                                        <div>BERANDA</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('berita.create') }}">
                                                <div>FORM BERITA</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('gallery.create') }}">
                                                <div>FORM GALERI</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('media.create') }}">
                                                <div>FORM VIDEO</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>PROFIL</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('tentangsekolah.create') }}">
                                                <div>FORM TENTANG SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('visidanmisi.create') }}">
                                                <div>FORM VISI & MISI SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('kepala.create') }}">
                                                <div>FORM KEPALA SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('pejabat.create') }}">
                                                <div>FORM PEJABAT SEKOLAH</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('jurusan.create') }}">
                                                <div>FORM KOMPETENSI KEAHLIAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('achievement.create') }}">
                                                <div>FORM PRESTASI SEKOLAH</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>DATA</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('sarana.create') }}">
                                                <div>FORM DATA SARPRAS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('matapelajaran.create') }}">
                                                <div>FORM DATA MATA PELAJARAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('gurusekolah.create') }}">
                                                <div>FORM DATA GURU</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('tenagapendidik.create') }}">
                                                <div>FORM DATA TENAGA PENDIDIK</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('siswasekolah.create') }}">
                                                <div>FORM DATA SISWA</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>INFO</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('infosekolah.create') }}">
                                                <div>FORM PENGUMUMAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('agendasekolah.create') }}">
                                                <div>FORM AGENDA KEGIATAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('jadwalmapel.create') }}">
                                                <div>FORM JADWAL PELAJARAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('jadwalexam.create') }}">
                                                <div>FORM JADWAL UJIAN</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('ekskul.create') }}">
                                                <div>FORM EKSTRAKURIKULER</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                        <div>OSIS</div>
                                    </a>
                                    <ul class="sub-menu-container" style="">
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('tentangosis.create') }}">
                                                <div>FORM TENTANG OSIS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('pengurus.create') }}">
                                                <div>FORM PENGURUS OSIS</div>
                                            </a>
                                        </li>
                                        <li class="menu-item" style="">
                                            <a class="menu-link" href="{{ route('kegosis.create') }}">
                                                <div>FORM KEGIATAN OSIS</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                    <div>LAIN</div>
                                </a>
                                <ul class="sub-menu-container" style="">
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('appschool.create') }}">
                                            <div>APLIKASI</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('infoppdb.create') }}">
                                            <div>PPDB</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                                {{-- <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('appschool.create') }}">
                                        <div>APLIKASI</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('infoppdb.create') }}">
                                        <div>PPDB</div>
                                    </a>
                                </li> --}}
                            <li class="menu-item"><a class="menu-link" href="#">
                                    <div>GOTA</div>
                                </a>
                                <ul class="sub-menu-container" style="">
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('gotakeg.create') }}">
                                            <div>FORM KEGIATAN GOTA</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('lapkeuangan.create') }}">
                                            <div>FORM LAPORAN KEUANGAN</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('donasi.create') }}">
                                            <div>FORM DONASI</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item"><a class="menu-link" href="#">
                                <div>LITERASI</div>
                            </a>
                            <ul class="sub-menu-container" style="">
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('guestbook.create') }}">
                                        <div>FORM BUKU TAMU</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('guestbook.create') }}">
                                        <div>LIHAT BUKU TAMU</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('infobuku.create') }}">
                                        <div>FORM DAFTAR BUKU</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('infofilm.create') }}">
                                        <div>FORM FILM</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('infosinopsis.create') }}">
                                        <div>FORM SINOPSIS</div>
                                    </a>
                                </li>
                                <li class="menu-item" style="">
                                    <a class="menu-link" href="{{ route('infomading.create') }}">
                                        <div>FORM MADING</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                                <li class="menu-item"><a class="menu-link" href="#">
                                    <div>OPINI</div>
                                </a>
                                <ul class="sub-menu-container" style="">
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ route('pendapat.create') }}">
                                            <div>TAMBAH OPINI</div>
                                        </a>
                                    </li>
                                    <li class="menu-item" style="">
                                        <a class="menu-link" href="{{ url('pendapat') }}">
                                            <div>LIHAT OPINI</div>
                                        </a>
                                    </li>
                                </ul>
                                <li class="menu-item" style="">
                                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </li>
                            
                            @endauth
                        </ul>

                    </nav><!-- #primary-menu end -->

                </div>
            </div>
        </div>
        <div class="header-wrap-clone"></div>
    </header><!-- #header end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap p-0 mb-4">
            @yield('content')
        </div>
    </section>

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="border-0">
    </footer><!-- #footer end -->

</div><!-- #wrapper end -->
</body>
</html>
<!-- Go To Top
	============================================= -->
<div id="gotoTop" class="icon-hand-up rounded-circle"></div>

<!-- JavaScripts
============================================= -->

<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/plugins.min.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="summernote-bs5.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="{{ asset('assets/js/functions.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@stack('js')
