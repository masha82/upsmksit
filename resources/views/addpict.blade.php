@extends('layouts.admin');
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Form Berita</title>
@endsection

@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Berita</h1>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="bg-light rounded h-100 p-4">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h6 class="mb-4">Basic Form</h6>
                    <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                        <div class="mb-3 col-12 form-group">
                            <label>Judul:</label>
                            <input type="text" name="judul" id="judul" class="form-control" required>
                        </div>
                        <div class="mb-3 col-12 form-group">
                            <label>Kategori:</label>
                            <input type="text" name="kategori" id="kategori" class="form-control" required>
                        </div>
                        <div class="mb-4">
                            <label>Isi Berita:</label>
                            <textarea class="summernote" name="isi" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Upload Foto:</label>
                            <input class="form-control" type="file" name="foto" id="foto" required>
                        </div>
                        <div class="mb-3 col-12 form-group">
                            <label>Editor:</label>
                            <input type="text" name="editor" id="editor" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div> 
    </section>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
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