@extends('layouts.mimin');
@push('css')
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
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
                    {{-- <h6 class="mb-4">Basic Form</h6> --}}
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
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div> 
        <div class="row">
            <h3 class="text-center">Daftar Berita</h3>
            <div>
                <table class="table table-striped" id="myTable">
                    <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script>
         $(document).ready(function () {
           var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('berita.data') }}",
                columns: [{
                    data: 'judul',
                    name: 'judul'
                },
                    {
                        data: 'kategori',
                        name: 'kategori'
                    },
                    {
                        data: 'foto',
                        name: 'foto'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>
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