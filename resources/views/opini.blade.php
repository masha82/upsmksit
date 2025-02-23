@extends('layouts.master')
@section('title')
    <title>Opini</title>
@endsection
@section('content')
    <section id="page-title">
        <div class="container clearfix">
            <h2>Opini Tentang SMKN 1 Situbondo</h2>
        </div>
    </section>
    <section>

        <div class="content-wrap">
            <div class="container">
                <div class="col-md-10">
                    <div class="row flex-row-reverse g-2">
                        <h4>Testimonials</h4>
                        <div class="container">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 align-items-stretch">
                                @foreach ($data as $item)
                                    
                                        <div class="col">
                                            <div class="card rounded-6 shadow-sm overflow-hidden h-100">
                                                <div class="card-body p-4">
                                                    <div class="row">
                                                        <div class="col-auto pt-2">
                                                        </div>
                                                        <div class="col">
                                                            <p class="mb-1 font-secondary text-medium">
                                                                {!! $item->judul !!}
                                                            </p>
                                                            <p class="mb-3 font-secondary text-medium">
                                                                {!! $item->isi !!}
                                                            </p>
                                                            <h4 class="h6 mb-0 fw-medium">{{ $item->nama_editor }}</h4>
                                                            <small class="text-muted">
                                                                @php
                                                                    if ($item->editor == 1) {
                                                                        echo 'Guru';
                                                                    } elseif ($item->editor == 2) {
                                                                        echo 'Siswa';
                                                                    } elseif ($item->editor == 3) {
                                                                        echo 'Wali Murid';
                                                                    }
                                                                @endphp
                                                            </small>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                   
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    {{-- <div>
        <div class="container topmargin bottommargin-lg clearfix">
            <div class="row col-mb-50 mb-0">
                @foreach ($data as $item)
                <div class="col-lg-8">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>{{ $item->judul }}</th>
                            <th>{{ $item->tgl_opini }}</th>
                            <th></th>
                            <th>{{ $item->editor }}</th>
                            <th>{{ $item->nama_editor }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                @endforeach
                </div>
               
            </div>
        </div> --}}
@endsection
@push('js')
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('pendapat.data') }}",
                columns: [{
                        data: 'judul',
                        name: 'judul'
                    }, {
                        data: 'tgl_opini',
                        name: 'tgl_opini'
                    }, {
                        data: 'isi',
                        name: 'isi'
                    }, {
                        data: 'editor',
                        name: 'editor'
                    },
                    {
                        data: 'nama_editor',
                        name: 'nama_editor'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ]
            });
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            var del = function(id) {
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
                            url: "{{ route('pendapat.index') }}/" + id,
                            method: "DELETE",
                            success: function(response) {
                                table.ajax.reload();
                                Swal.fire(
                                    'Terhapus!',
                                    'File sudah dihapus',
                                    'sukses'
                                )
                            },
                            failure: function(response) {
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
            $('body').on('click', '.hapus-data', function() {
                del($(this).attr('data-id'));
            });

        });
    </script>
@endpush
