@extends('layouts.master')
@push('css')
    <link rel="stylesheet" href="{{ url('https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.1/dist/sweetalert2.min.css" rel="stylesheet">
@endpush
@section('title')
    <title>Jadwal Ujian</title>
@endsection
@section('content') 
    <section id="page-title">
        <div class="container clearfix">
            <h2>Jadwal Ujian</h2>
        </div>
    </section>
            
    <div>
        <div class="container topmargin bottommargin-lg clearfix">
            <div class="row col-mb-50 mb-0">
                <div class="col-lg-8">
                    <table class="table table-striped" id="myTable">
                        <thead>
                        <tr>
                            <th>Tahun Ajaran</th>
                            <th>Semester</th>
                            <th>Nama Ujian</th>
                            <th>File</th>
                            <th>Unduh</th>
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
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('jadwalexam.index') }}",
                columns: [{
                    data: 'thn_ajaran',
                    name: 'thn_ajaran'
                },
                    {
                        data: 'semester',
                        name: 'semester'
                    },
                    {
                        data: 'nama_ujian',
                        name: 'nama_ujian'
                    },
                    {
                        data: 'file',
                        name: 'file'
                    },
                    {
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