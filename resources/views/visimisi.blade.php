@extends('layouts.master')
@section('title')
    <title>Visi dan Misi SMKN 1 Situbondo</title>
@endsection
@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h2>Visi dan Misi SMKN 1 Situbondo</h2>
        </div>
    </section>
<div class="content-wrap">
    <!-- visi -->
    <div class="container clearfix">
        <div class="row col-mb-50 mb-0">
            <div class="col-lg-8">
                <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                    <h3>Visi Sekolah</h3>
                </div>
                    <h4><p>{!! $visi->visi !!}</p></h4>
            </div>
        </div>
    </div>
    <!-- misi -->
    <div class="container clearfix">
        <div class="row col-mb-50 mb-0">
            <div class="col-lg-8">
                <div class="heading-block fancy-title border-bottom-0 title-bottom-border">
                    <h3>Misi Sekolah</h3>
                </div>
                    <h4><p>{!! $visi->misi !!}</p></h4>
                </div>
        </div>
    </div>
@endsection