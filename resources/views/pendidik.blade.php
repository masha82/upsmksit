@extends('layouts.master')
@section('title')
    <title>Tenaga Pendidik</title>
@endsection
@push('css')
<style>
    .img-fit {
        display: block;
        max-height: 300px;
        width: auto;
        height: auto;
        object-fit: cover !important;
    }
</style>
@endpush
@section('content') 
    <section id="page-title">
        <div class="container clearfix">
            <h2>Tenaga Pendidik SMKN 1 Situbondo</h2>
        </div>
    </section>

    <div class="container clearfix">
        <div class="heading-block topmargin-sm center">
    </div>
    <div class="row">
        @foreach($pendidik as $tenagapendidik)    
        <div class="col-lg-3 col-md-6 bottommargin">
                <div class="team">
                    <div class="team-image">
                        <img src="{{asset('foto_pendidik/'.$tenagapendidik->foto)}}" alt="Image" class="mb-0 img-fit">
                    </div>
                <div class="team-desc team-desc-bg">
                    <div class="team-title">
                        <h4>   {!! $tenagapendidik->nama_pendidik !!}</h4>
                        <span> {!! $tenagapendidik->bidang !!} </span>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection