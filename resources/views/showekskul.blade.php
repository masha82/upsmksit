@extends('layouts.master')
@section('title')
    <title>Detail Ekstrakurikuler</title>
@endsection
@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h1>Detail Ekstrakurikuler</h1>
        </div>
    </section>

 <!-- Posts Area
        ============================================= -->
        <div class="col-lg-8">


            <div class="entry clearfix">
                <h2 class="mb-3 fw-bold h1"> {{$data->judul}}</h2>
                <div class="entry-meta d-flex justify-content-between mb-4">
                </div>

                <div class="entry-image">
                    <a href="demo-news-single.html"><img src="{{asset('gambar/' . $data->file)}}" alt="Image 3"></a>

                </div>

                <div class="entry-content mt-0">

                    {!! $data->isi!!}
                </div>

            </div>

        </div>

        <!-- Top Sidebar Area
    ============================================= -->
        <div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
            <div class="sticky-sidebar">
                <!-- Sidebar Widget 1
            ============================================= -->
                <div class="widget clearfix">
                    <h3 class="font-secondary fw-medium h4">Ekstrakurikuler</h3>
                    <div class="row posts-md col-mb-30">
                        {{-- @foreach ($berita as $item)
                            <article class="entry col-12">
                                <div class="grid-inner row gutter-20">
                                    <div class="col-md-4">
                                        <a class="entry-image" href="#"><img
                                                src="{{ asset('gambar/' . $item->file) }}"
                                                alt="Image"></a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="entry-title title-xs">
                                            <h3><a href="{{route('news.show', $item->id)}}"
                                                   class="stretched-link color-underline">{{ $item->judul }}</a>
                                            </h3>
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
                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div> <!-- Sidebar End -->
    </div>
</div>
@endsection