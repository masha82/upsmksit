@extends('layouts.master')
@section('title')
    <title>Laporan</title>
@endsection
@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <br><h2>Laporan Keuangan</h2><br><br>
        </div>
    </section>
    <div class="container clearfix">
        <div class="heading-block topmargin-sm center">
    </div>
    <div class="row gutter-40 col-mb-80">
        <div class="postcontent col-lg-12">
            <div id="posts" class="row gutter-40 mb-0">
                @foreach ($data as $item) 
                    <div class="entry col-12 mt-0 mb-0">
                        <div class="grid-inner row g-0">
                            <div class="col-md-4">
                                <a class="entry-image" href="#" data-lightbox="image"><img
                                        src="{{ asset('foto_lapkeuangan/' . $item->foto) }}"
                                        alt="Standard Post with Image"></a>
                            </div>
                            <div class="col-md-8 ps-md-4">
                                <div class="entry-title title-sm">
                                    <h4><a href="{{route('lapkeuangan.show',$item->id)}}">{{ $item->nama_keuangan }}</a></h4>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i>
                                            {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry-content">
                                    <a href="{{route('lapkeuangan.show',$item->id)}}" class="button button-border button-rounded">Lihat info
                                        selengkapnya</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row mb-3">
                {{ $data->links('layouts.paginate') }}
            </div> --}}
@endsection
