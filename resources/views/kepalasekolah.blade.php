@extends('layouts.master')
@section('title')
    <title>Kepala Sekolah</title>
@endsection
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h2>Profil Kepala SMKN 1 Situbondo</h2>
    </div>
</section>
        <div class="container clearfix">
            <div class="topmargin-sm center">
        </div>
            <div class="row col-mb-50">
                <div class="col-md-6 d-none d-md-flex align-self-end">
                    <img src="{{asset('foto_kepsek/'.$kepala->foto)}}" alt="Image" class="mb-0">
                </div>
                <div class="col-md-6 mb-5 subscribe-widget">
                    <div>
                    <label>Nama: {!! $kepala->nama !!} </label><br>
                    <label>NIP:  {!! $kepala->nip !!}  </label><br>
                    <label>Pendidikan Terakhir: {!! $kepala->riwayat !!} </label><br>
                    {!! $kepala->ucapan !!} <br>
                    <div>
                </div>
            </div>
        </div>
    </div>
@endsection