@extends('layouts.lulus')
@section('content')
<div class="page-title">
    <div class="title_left">
      <h3>Form Tambah Data Kelulusan Siswa</h3>
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
                <h2>Input Data Kelulusan Siswa <small></small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('graduate.store') }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('POST')
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tahun Ajaran <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="thn_ajaran" id="thn_ajaran" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NISN<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="nisn" id="nisn" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nomor Peserta/Ujian<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="no_ujian" id="no_ujian" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Nama Siswa<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="namasiswa" id="namasiswa" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Tempat Tanggal Lahir<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="ttl" id="ttl" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kelas<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="kelas" id="kelas" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Kompetensi Keahlian<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="jurusan" id="jurusan" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Status Kelulusan<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" name="status" id="status" required="required" class="form-control">
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            {{-- <button class="btn btn-primary" type="button">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button> --}}
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection