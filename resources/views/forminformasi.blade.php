@extends('layouts.mimin')
@push('css')
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Form Informasi </title>
@endsection
@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Informasi Soal Ujian</h1>
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
                        <form class="row" action="{{ route('ujianinfo.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Hari:</label>
                                <input type="text" name="hari" id="hari" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Nama Mata Pelajaran:</label>
                                <input type="text" name="mapel" id="mapel" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Link Soal:</label>
                                <input type="text" name="linknya" id="linknya" class="form-control">
                            </div>
                            {{-- <div class="col-12 form-group">
                                <label>Isi Pengumuman:</label>
                                <textarea class="summernote" name="isi"></textarea>
                            </div> --}}
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <h6 class="text-center">Daftar Informasi Soal Ujian</h6>
                    <div>
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Nama Mata Pelajaran</th>
                                <th>Link Soal</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('ujianinfo.data') }}",
                columns: [{
                    data: 'hari',
                    name: 'hari'
                },{
                    data: 'mapel',
                    name: 'mapel'
                },{
                    data: 'linknya',
                    name: 'linknya'
                },{
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
            var del = function (id) {
                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Data yang sudah terhapus tidak bisa dikembalikan lagi!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('ujianinfo/hapus') }}/" + id,
                            method: "POST",
                            success: function (response) {
                                table.ajax.reload();
                                Swal.fire(
                                    'Terhapus!',
                                    'File sudah dihapus',
                                    'sukses'
                                )
                            },
                            failure: function (response) {
                                swal(
                                    "Internal Error",
                                    "Oops, your note was not saved.", // had a missing comma
                                    "error"
                                )
                            }
                        });
                    }
                })
            };
            $('body').on('click', '.hapus-data', function () {
                del($(this).attr('data-id'));
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
