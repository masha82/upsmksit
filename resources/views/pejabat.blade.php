@extends('layouts.master')
@section('title')
    <title>Wakil Kepala SMKN 1 Situbondo</title>
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
            <h2>Wakil Kepala SMKN 1 Situbondo</h2>
        </div>
    </section>

    <div class="container clearfix">
        <div class="heading-block topmargin-sm center">
    </div>
    <div class="row">
        @foreach($pejabat as $wakasek)    
        <div class="col-lg-3 col-md-6 bottommargin">
                <div class="team">
                    <div class="team-image">
                        <img src="{{asset('foto_pejabat/'.$wakasek->foto)}}" alt="Image" class="mb-0 img-fit">
                    </div>
                <div class="team-desc team-desc-bg">
                    <div class="team-title">
                        <h4>   {!! $wakasek->nama !!}</h4>
                        <span>{!! $wakasek->nip !!}</span>
                        <span>{!! $wakasek->jabatan !!}</span>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
            
@endsection