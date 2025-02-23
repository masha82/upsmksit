@extends('layouts.master')
@push('css')
    <link href="https://cdn.datatables.net/2.0.0/css/dataTables.bootstrap5.css" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Informasi Soal Ujian</title>
@endsection
@section('content') 
    <section id="page-title">
        <div class="container clearfix">
            <div>
            <h2>Informasi Soal Ujian</h2>
            </div>
        </div>
    </section>
            
    <div>
        <div class="container topmargin bottommargin-lg clearfix">
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-8">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>Hari</th>
                            <th>Mapel</th>
                            <th>Link Soal Ujian</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.bootstrap5.js"></script>

    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('ujianinfo.index') }}",
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
        });
    </script>
@endpush