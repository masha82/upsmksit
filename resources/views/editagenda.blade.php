@extends('layouts.mimin')
@push('css')
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
@endpush
@section('title')
    <title>Form Agenda Kegiatan</title>
@endsection
@section('content')
        <section id="page-title">    
            <div class="container clearfix">
                <h1>Form Agenda Kegiatan</h1>
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
                        <form class="row" action="{{ route('agendasekolah.update', $data->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 form-group">
                                <label>Nama Agenda:</label>
                                <input type="text" value="{{ $data->nama }}"name="nama" id="nama" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Tanggal Agenda:</label>
                                <input type="text" value="{{ $data->tgl_agenda }}" name="tgl_agenda" id="tgl_agenda" class="form-control datepicker">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Foto Agenda:</label>
                                <img src="{{asset('gambar_agenda/'.$data->foto)}}" alt="Image">
                            </div>
                            <div class="col-12 form-group">
                                <label>Isi Agenda:</label>
                                <textarea class="summernote" name="isi" id="isi">{{ $data->isi }}</textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Update</button>
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            $('#tgl_agenda').datepicker({
                uiLibrary: 'bootstrap4',
                format: 'yyyy-mm-dd'
            });
            $('.summernote').summernote({
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['height', ['height']],
                    ['link', ['link']]
                ]
            });
        });
    </script>
@endpush
