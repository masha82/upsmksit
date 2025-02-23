@extends('layouts.mimin')
@push('css')
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Edit Kepala Sekolah</title>
@endsection
@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Edit Data Kepala Sekolah</h1>
        </div>
    </section>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-lg-6">
                        <form class="row" action="{{ route('kepala.update', $data->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 form-group">
                                <label>Nama Kepala Sekolah:</label>
                                <input type="text" name="nama" id="nama" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>NIP:</label>
                                <input type="text" name="nip" id="nip" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Jabatan:</label>
                                <input type="text" name="jabatan" id="jabatan" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Riwayat Pendidikan:</label>
                                <input type="text" name="riwayat" id="riwayat" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Upload Foto Kepala Sekolah:</label>
                                <input type="file" class="form-control" name="foto" id="foto"/>
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Ucapan:</label>
                                <input type="text" name="ucapan" id="ucapan" class="form-control">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
@endpush
