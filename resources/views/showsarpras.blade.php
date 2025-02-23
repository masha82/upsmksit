@extends('layouts.master')
@section('title')
    <title>Detail Sarpras</title>
@endsection
@section('content') 
    <section id="page-title">
        <div class="container clearfix">
            <h1>Detail Sarana Prasarana</h1><br>
            <h2>{{ $data->nama_sarpras }}</h2>
        </div>
    </section>
    <div>
        <div class="container topmargin bottommargin-lg clearfix">
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-8">
                    <table class="table table-striped table-hover table-bordered" id="myTable">
                            <tr>
                                <th>Nama</th>
                                <td>: {{ $data->nama_sarpras }}</td>
                            </tr>
                            <tr>
                                <th>Jenis Ruang</th>
                                <td>: {{ $data->jenis_ruang }}</td>
                            </tr>
                            <tr>
                                <th>Panjang</th>
                                <td>: {{ $data->panjang }}</td>
                            </tr>
                            <tr>
                                <th>Lebar</th>
                                <td>: {{ $data->lebar }}</td>
                            </tr>
                            <tr>
                                <th>Kondisi</th>
                                <td>: @php
                                    if ($data->kondisi == 1) {
                                        echo "Baik";
                                    } elseif ($data->kondisi == 2) {
                                        echo "Rusak Ringan";
                                    } elseif ($data->kondisi == 3) {
                                        echo "Rusak Berat";
                                    }
                                @endphp
                                </td>
                            </tr>
                            <tr>
                                <th>Kesesuaian</th>
                                <td>: {{ $data->kesesuaian }}</td>
                            </tr>
                    </table>
                </div>
               <div class="row">
                <div class="col-md-6">
                    <div class="entry-content mt-0">
                        <div class="card border-0 h-100 shadow-sm">
                            <h3 class="card-header font-primary p-4 color1">Sarana:</h3>
                            <div class="card-body p-4">
                                <ul class="ps-3 mt-4 mb-0">
                                    {!! $data->sarana !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="entry-content mt-0">
                        <div class="card border-0 h-100 shadow-sm">
                            <h3 class="card-header font-primary p-4 color1">Prasarana:</h3>
                            <div class="card-body p-4">
                                <ul class="ps-3 mt-4 mb-0">
                                    {!! $data->prasarana !!}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
               </div>
                <div class="entry-image mt-4">
                    <h4><strong> Foto Sarana Prasarana </strong></h4><br>
                    <a href="demo-news-single.html"><img src="{{asset('gambar_sarpras/' . $data->foto)}}" alt="Image 3"></a>
                </div>
                </div>
            </div>
        </div>
@endsection