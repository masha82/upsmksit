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
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Data Kelulusan Siswa</h3>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Data Kelulusan Siswa SMKN 1 Situbondo</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
            <div class="col-sm-12">
                @csrf
              <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                <thead>
                  <tr>
                    <th>Tahun Ajaran</th>
                    <th>NISN</th>
                    <th>Nomor Ujian</th>
                    <th>Nama Siswa</th>
                    <th>TTL</th>
                    <th>Kelas</th>
                    <th>Kompetensi Keahlian</th>
                    <th>Status Kelulusan</th>
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
                ajax: "{{ route('graduate.data') }}",
                columns: [{
                    data: 'thn_ajaran',
                    name: 'thn_ajaran'
                }, {
                    data: 'nisn',
                    name: 'nisn'
                }, {
                    data: 'no_peserta',
                    name: 'no_peserta'
                }, {
                    data: 'namasiswa',
                    name: 'namasiswa'
                }, {
                    data: 'ttl',
                    name: 'ttl'
                }, {
                    data: 'kelas',
                    name: 'kelas'
                }, {
                    data: 'jurusan',
                    name: 'jurusan'
                }, {
                    data: 'status',
                    name: 'status'
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