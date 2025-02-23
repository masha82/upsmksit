@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/gallerycss/style.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/gallerycss/dark.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/gallerycss/font-icons.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/gallerycss/animate.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/gallerycss/magnific-popup.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/gallerycss/custom.css') }}" type="text/css"/>
@endpush
@section('title')
    <title>Galeri</title>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="container topmargin bottommargin-lg">
            <div class="mx-auto" style="max-width: 700px">
                <h2 class="mb-2 nott center ls0 gradient-text gradient-horizon">GALERI SMK NEGERI 1 Situbondo</h2>
            </div>
        </div>
    </div>
</div>
<div class="row posts-md col-mb-30">
    <div class="masonry-thumbs grid-container grid-3" data-big="2" data-lightbox="gallery">
        @foreach($galerii as $item)
            <a class="grid-item" href="{{ asset('galerifoto/' . $item->foto) }}"
               data-lightbox="gallery-item"><img
                    src="{{ asset('galerifoto/' . $item->foto) }}" alt="Gallery Thumb 1"></a>
        @endforeach
    </div>
 </div>
@endsection
@push('js')
    <script src="{{ asset('assets/galleryjs/jquery.js') }}"></script>
    <script src="{{ asset('assets/galleryjs/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/galleryjs/functions.js') }}"></script>
@endpush
