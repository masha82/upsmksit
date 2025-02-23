@extends('layouts.master')
@section('title')
    <title>Kompetensi Keahlian</title>
@endsection
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
          integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <style>
    .img-fit {
        display: block;
        max-height: 200px;
        width: auto;
        height: auto;
        object-fit: cover !important;
    }
    </style>
@endpush

@section('content')
<section id="page-title">
    <div>
    </div>
    <div class="container clearfix">
        <br><h2>Kompetensi Keahlian/Jurusan di SMKN 1 Situbondo</h2><br>
    </div>
</section>
        <div class="container clearfix">
            <div class="topmargin-sm center">
        </div>
            <div class="col-md-12">
                <div class="line mt-0"></div>
                <div id="oc-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="1"
                     data-loop="true" data-nav="true" data-pagi="false" data-items-xs="1" data-items-sm="2"
                     data-items-md="3" data-items-lg="4" data-items-xl="4">
                    @foreach($data as $item)
                        <div class="portfolio-item">
                            <div class="portfolio-image">
                                <a href="{{route('jurusan.show',$item->id)}}">
                                    <img src="{{asset('foto_kompetensi/'.$item->foto)}}" alt="Image">
                                </a>
                                <div class="bg-overlay">
                                    <div class="bg-overlay-content dark" data-hover-animate="fadeIn"
                                         data-hover-speed="350">
                                        <a href="{{asset('foto_kompetensi/'.$item->foto)}}"
                                           class="overlay-trigger-icon bg-light text-dark"
                                           data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall"
                                           data-hover-speed="350" data-lightbox="image"><i
                                                class="icon-line-plus"></i></a>
                                        <a href="{{route('jurusan.show',$item->id)}}" class="overlay-trigger-icon bg-light text-dark"
                                           data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeInUpSmall"
                                           data-hover-speed="350"><i class="icon-line-ellipsis"></i></a>
                                    </div>
                                    <div class="bg-overlay-bg dark" data-hover-animate="fadeIn"
                                         data-hover-speed="350"></div>
                                </div>
                            </div>
                            <div class="portfolio-desc">
                                <h4><a href={{route('jurusan.show',$item->id)}}> {!! $item->nama_keahlian !!} </a></h4>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function (e) {
            jQuery(document).ready(function () {
                jQuery('.owl-carousel').owlCarousel({
                    loop: true,
                    autoplay: true,
                    slideTransition: 'linear',
                    autoplaySpeed: 3000,
                    smartSpeed: 3000,
                    center: true,
                    margin: 22,
                    dots: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 2,
                            nav: true
                        },
                        992: {
                            items: 3,
                            nav: true
                        },
                        1300: {
                            items: 4,
                            nav: true
                        },
                        1500: {
                            items: 4,
                            nav: true
                        },
                    }
                });
                jQuery('.owl-carousel').trigger('play.owl.autoplay', [2000]);

                function setSpeed() {
                    jQuery('.owl-carousel').trigger('play.owl.autoplay', [3000]);
                }

                $('.owl-nav').css('display', 'true');
                setTimeout(setSpeed, 1000);

            });
        })
    </script>
@endpush
