@extends('layouts.mimin')
@push('css')
<link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Edit Buku</title>
@endsection
@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Edit List Buku</h1>
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
                        <form class="row" action="{{ route('infobuku.update', $data->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="col-12 form-group">
                                <label>Nomor Buku:</label>
                                <input type="text" value="{{ $data->no_buku }}" name="no_buku" id="no_buku" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Judul:</label>
                                <input type="text" value="{{ $data->judul }}" name="judul" id="judul" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Penerbit:</label>
                                <input type="text" value="{{ $data->penerbit }}" name="penerbit" id="penerbit" class="form-control">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
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

