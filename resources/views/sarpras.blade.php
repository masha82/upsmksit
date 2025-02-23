@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Sarpras</title>
@endsection
@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h2>Sarana Prasarana</h2>
    </div>
</section>
    <div class="container mt-4">
        <div class="row col-mb-30">
            @foreach ($data as $item)
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 h-100 shadow-sm">
                    <h4 class="card-header font-primary p-4 color1">{{ $item->nama_sarpras }}</h4>
                    <div class="card-body p-4">
                        Sarana Prasarana
                        <ul class="ps-3 mt-4 mb-0">
                            <li class="mb-3">{{ $item->jenis_ruang }}</li>
                            <li class="mb-3">
                                @php
                                if ($item->kondisi == 1) {
                                    echo "Baik";
                                } elseif ($item->kondisi == 2) {
                                    echo "Rusak Ringan";
                                } elseif ($item->kondisi == 3) {
                                    echo "Rusak Berat";
                                }
                            @endphp
                            </li>
                        </ul>
                        <a href="{{route('sarana.show',$item->id)}}" class="more-link fst-normal ms-3">Lihat selengkapnya <i
                                class="icon-line-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
    </div>
@endsection
