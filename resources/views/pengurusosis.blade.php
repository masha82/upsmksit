@extends('layouts.master')
@section('title')
    <title>Pengurus OSIS</title>
@endsection
@push('css')
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
        <div class="container clearfix">
            <h2>Pengurus OSIS SMKN 1 Situbondo</h2>
        </div>
    </section>

    <div class="container clearfix">
        <div class="heading-block topmargin-sm center">
    </div>
    <div class="row">
        @foreach($pengurus as $pengurusosis)    
        <div class="col-lg-3 col-md-6 bottommargin">
                <div class="team">
                    <div class="team-image">
                        <img src="{{asset('foto_pengurus/'.$pengurusosis->foto)}}" alt="Image" class="mb-0 img-fit">
                    </div>
                <div class="team-desc team-desc-bg">
                    <div class="team-title">
                        <h4>   {!! $pengurusosis->nama !!}</h4>
                        <span>{!! $pengurusosis->jabatan !!}</span>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection