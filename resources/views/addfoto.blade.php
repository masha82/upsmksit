@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Tambah Foto</title>
@endsection
@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Tambah Foto Kompetensi Keahlian/Jurusan</h1>
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
                        <form class="row" action="{{ route('jurusan.simpan', $data->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Upload Foto:</label>
                                <input type="file" class="form-control" name="foto" id="foto"/>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Tambah Foto</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
        <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
@endpush
