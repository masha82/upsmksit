@extends('layouts.lulus')
@push('css')
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="{{ asset('asset-lulus/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-lulus/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-lulus/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-lulus/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset-lulus/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="page-title">
    <div class="title_left">
      <h3>Form Tambah Waktu Kelulusan Siswa</h3>
    </div>
  </div>
<div class="clearfix"></div>
    <div class="row">
        @if (session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div>
        @endif
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Input Waktu Kelulusan Siswa <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('graduate.simpanwaktu') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Waktu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="datetime-local" name="time" id="time" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
                <div class="x_content">
                    <div class="row">
                <div class="col-sm-12">
                  <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                      <tr>
                        <th>Waktu</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                </table>
            </div>
            </div>
                </div>
                </div>
                </div>
            </div>
          </div>
        </div>
    @endsection
    @push('js')
        <!-- Datatables -->
        <script src="{{ asset('asset-lulus/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
        <script src="{{ asset('asset-lulus/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                var table = $('#myTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('graduate.datawaktu') }}",
                    columns: [{
                        data: 'time',
                        name: 'time',
                    }, {
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
                                url: "{{ url('graduate/hapus') }}/" + id,
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