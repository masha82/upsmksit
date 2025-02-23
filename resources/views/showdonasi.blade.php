@extends('layouts.master')
@section('title')
    <title>{{ $data->nama_donasi }} </title>
@endsection
@section('content')
<div class="container clearfix">
    <div class="row mt-5 clearfix">

        <!-- Posts Area
    ============================================= -->
        <div class="col-lg-8">


            <div class="entry clearfix">
                <h3 class="mb-3 fw-bold h1"> {{$data->nama_donasi}}</h3>
                <div class="entry-meta d-flex justify-content-between mb-4">
                    <ul>
                        <li><i class="icon-time"></i><a
                                href="#">{{ \Carbon\Carbon::parse($data->created_at)->isoFormat('dddd, D MMMM Y') }}</a>
                        </li>
                    </ul>

                </div>

                <div class="entry-image">
                    <a href="demo-news-single.html"><img src="{{asset('foto_donasi/' . $data->foto)}}" alt="Image 3"></a>
                </div>

                <div class="entry-content mt-0">
                    {!! $data->isi!!}
                </div>
                {{-- <div class="entry-content">
                    <a href="{{asset('file_pengumuman/'.$data->file)}}" target="_blank"
                       class="button button-border button-rounded">Unduh file</a>
                </div> --}}
            </div>

        </div>

        <!-- Top Sidebar Area
    ============================================= -->
        <div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
            <div class="sticky-sidebar">
                <!-- Sidebar Widget 1
            ============================================= -->
                <div class="widget clearfix">
                    <h5 class="font-secondary fw-medium h4">Donasi Terbaru</h5>
                    <div class="row posts-md col-mb-30">
                        @foreach ($donasiku as $item)
                            <article class="entry col-12">
                                <div class="grid-inner row gutter-20">
                                    <div class="col-md-4">
                                        <a class="entry-image" href="#"><img
                                                src="{{ asset('foto_donasi/' . $item->foto) }}"
                                                alt="Image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="entry-title title-xs">
                                            {{-- <div class="entry-categories"><a href="demo-blog-categories.html">Market</a></div> --}}
                                            <h6><a href="{{route('donasi.show', $item->id)}}"
                                                   class="stretched-link color-underline">{{ $item->nama_donasi }}</a>
                                            </h6>
                                        </div>
                                        <div class="entry-meta">
                                            <ul>
                                                <li><a
                                                        href="#">{{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!-- Sidebar End -->
    </div>
</div>
@endsection