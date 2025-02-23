@extends('layouts.master')
@section('title')
    <title>Guru SMKN 1 Situbondo</title>
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
            <h2>Guru SMKN 1 Situbondo</h2>
        </div>
    </section>

    <div class="container clearfix">
        <div class="heading-block topmargin-sm center">
    </div>
    <div class="row">
        @foreach($guru as $guruschool)    
        <div class="col-lg-3 col-md-6 bottommargin">
                <div class="team">
                    <div class="team-image">
                        <img src="{{asset('foto_guru/'.$guruschool->foto)}}" alt="Image" class="mb-0 img-fit">
                    </div>
                <div class="team-desc team-desc-bg">
                    <div class="team-title">
                        <h4>   {!! $guruschool->nama_guru !!}</h4>
                        <span>{!! $guruschool->mapel->nama_mapel !!}</span>
                    </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
            
@endsection