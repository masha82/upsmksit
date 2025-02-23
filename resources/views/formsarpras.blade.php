@extends('layouts.mimin');
@push('css')
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('title')
    ;
    <title>Form Sarana Prasarana</title>
@endsection

@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Sarana Prasarana</h1>
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
                        <form class="row" action="{{ route('sarana.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Nama Sarana Prasarana:</label>
                                <input type="text" name="nama_sarpras" id="nama_sarpras" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Jenis Ruangan:</label>
                                <input type="text" name="jenis_ruang" id="jenis_ruang" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Panjang (cm):</label>
                                <input type="number" name="panjang" id="panjang" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Lebar (cm):</label>
                                <input type="number" name="lebar" id="lebar" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Kondisi:</label>
                                <select class="form-control" name="kondisi" id="kondisi">
                                    <option>-- Pilih Salah Satu --</option>
                                    <option value="1">Baik</option>
                                    <option value="2">Rusak Ringan</option>
                                    <option value="3">Rusak Berat</option>
                                </select>
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label">Upload Foto:</label>
                                <input type="file" class="form-control" name="foto" id="foto"/>
                            </div>
                            <div class="col-12 form-group">
                                <label>Sarana:</label>
                                <textarea class="summernote" name="sarana"></textarea>
                            </div>
                            <div class="col-12 form-group">
                                <label>Prasarana:</label>
                                <textarea class="summernote" name="prasarana"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <h6 class="text-center">Daftar Sarana Prasarana Sekolah</h6>
                    <div>
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>Nama Sarana Prasarana</th>
                                <th>Jenis Ruangan</th>
                                <th>Panjang</th>
                                <th>Lebar</th>
                                <th>Kondisi</th>
                                <th>Foto</th>
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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('sarana.data') }}",
                columns: [{
                    data: 'nama_sarpras',
                    name: 'nama_sarpras'
                },
                    {
                        data: 'jenis_ruang',
                        name: 'jenis_ruang'
                    },
                    {
                        data: 'panjang',
                        name: 'panjang'
                    },
                    {
                        data: 'lebar',
                        name: 'lebar'
                    },
                    {
                        data: 'kondisi',
                        name: 'kondisi'
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
                            url: "{{ url('sarana/hapus') }}/" + id,
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
