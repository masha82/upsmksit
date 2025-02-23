@extends('layouts.mimin')
@push('css')
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush
@section('title')
    <title>Buku Tamu</title>
@endsection
@section('content')
    <section id="page-title">    
        <div class="container clearfix">
            <h1>Form Buku Tamu</h1>
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
                        <form class="row" action="{{ route('guestbook.store') }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="col-12 form-group">
                                <label for="sel1">Peran:</label>
                                    <select class="form-control" name="peran" id="peran">
                                        <option><label>-- Pilih Salah Satu --</label></option>
                                        <option value="1">Guru</option>
                                        <option value="2">TAS</option>
                                        <option value="3">Siswa</option>
                                    </select>
                                </div>
                            <div class="col-12 form-group">
                                <label>Nama Tamu:</label>
                                <input type="text" name="nama_tamu" id="nama_tamu" class="form-control">
                            </div>
                            <div class="col-12 form-group">
                                <label>Tanggal:</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control">
                            </div>					
                            <div class="col-12 form-group">
                                <label>Kepentingan:</label>
                                <input type="text" name="kepentingan" id="kepentingan" class="form-control">
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Simpan</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <h6 class="text-center">Daftar Tamu</h6>
                    <div>
                        <table class="table table-striped" id="myTable">
                            <thead>
                            <tr>
                                <th>Peran</th>
                                <th>Nama Tamu</th>
                                <th>Tanggal</th>
                                <th>Kepentingan</th>
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
                ajax: "{{ route('guestbook.data') }}",
                columns: [{
                    data: 'peran',
                    name: 'peran'
                }, {
                    data: 'nama_tamu',
                    name: 'nama_tamu'
                },{
                    data: 'tanggal',
                    name: 'tanggal'
                },{
                    data: 'kepentingan',
                    name: 'kepentingan'
                },
                    {
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
                            url: "{{ url('guestbook/hapus') }}/" + id,
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
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            $('body').on('click', '.hapus-data', function () {
                del($(this).attr('data-id'));
            });
        });
    </script>
@endpush
