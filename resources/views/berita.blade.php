@extends('layouts.master')
@section('title')
    <title>Berita</title>
@endsection
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Berita Tentang SMKN 1 Sempol</h1>
    </div>
</section>
        <div class="container clearfix">
            <div class="heading-block topmargin-sm center">
        </div>
            <div class="postcontent mt-6 col-lg-12">
                <div id="posts" class="row gutter-40 mb-0">
                    @foreach ($data as $item)
                        <div class="entry col-12 mt-0 mb-0">
                            <div class="grid-inner row g-0">
                                <div class="row">
                                    <div class="col">
                                        <div class="blog-posts single-post">
                                            <article class="post post-large blog-single-post border-0 m-0 p-0">
                                                <div class="post-image ms-0">
                                                    <a href="blog-post.html">
                                                        <img src="{{ asset('gambar_berita/' . $item->foto) }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                                    </a>
                                                </div>            
                                            </article>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 ps-md-4">
                                    <div class="entry-title title-sm">
                                        <h2><a href="{{route('berita.show',$item->slug)}}">{{ $item->judul }}</a></h2>
                                    </div>
                                    <div class="entry-meta">
                                        <ul>
                                            <li><i class="icon-calendar3"></i>
                                                {{ \Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }}
                                            </li>
                                            <li><i class="icon-user"></i> {{ $item->editor }}</li>
                                            <li><i class="icon-folder-open"></i> <a
                                                    href="#">{{ $item->kategori }}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <a href="{{route('berita.show',$item->slug)}}" class="button button-border button-rounded">Baca
                                            selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    @endforeach
                </div>
                <div class="row mb-3">
                    {{ $data->links('layouts.paginate') }}
                </div>
            </div>
        </div>
@endsection
