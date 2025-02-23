@extends('layouts.mimin')
@push('css')
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Form Tenaga Pendidik</title>
@endsection
@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Tenaga Pendidik SMKN 1 Situbondo</h1>
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
                        <form class="row" action="{{ route('tenagapendidik.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label>Nama Tenaga Pendidik:</label>
                                <input type="text" name="nama_pendidik" id="nama_pendidik" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>NIP: *(jika ada silakan diisi)</label>
                                <input type="text" name="nip" id="nip" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label for="sel1">Bidang:</label>
                                <input type="text" name="bidang" id="bidang" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label class="form-label" for="customFile">Upload Foto:</label>
                                <input type="file" class="form-control" name="foto" id="foto"/>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <h6 class="text-center">Daftar Tenaga Pendidik SMKN 1 Situbondo</h6>
                    <div>
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>Nama Tenaga Pendidik</th>
                                <th>NIP</th>
                                <th>Bidang</th>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('tenagapendidik.data') }}",
                columns: [{
                    data: 'nama_pendidik',
                    name: 'nama_pendidik'
                },
                    {
                        data: 'nip',
                        name: 'nip'
                    },
                    {
                        data: 'bidang',
                        name: 'bidang'
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
                            url: "{{ url('tenagapendidik/hapus') }}/" + id,
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
@endpush
