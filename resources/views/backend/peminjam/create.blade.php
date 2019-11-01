@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('peminjam.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group-inner">
                            <label>Kode Peminjam</label>
                                <input required class="form-control" type="text" name="peminjam_kode">
                        </div>
                        <div class="form-group-inner">
                            <label>Nama Peminjam</label>
                                <input required class="form-control" type="text" name="peminjam_nama" value="{{Auth::user()->name}}">
                        </div>
                        <div class="form-group-inner">
                            <label>Alamat Peminjam</label>
                                <textarea required id="" class="form-control" name="peminjam_alamat" rows="10" cols="50"></textarea>
                        </div>
                        <label>Telp Peminjam</label>
                        <div class="form-group-inner">
                                <input required class="form-control" type="text" name="peminjam_telp">
                        </div>
                        <label>Foto</label>
                        <div class="file-upload-inner ts-forms">
                            <div class="input prepend-big-btn">
                                <label class="icon-right" for="prepend-big-btn">
                                    <i class="fa fa-download"></i>
                                </label>
                            <div class="file-button">
                                Chose Photo
                                <input required type="file" class="form-control" name="peminjam_foto" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                            </div>
                            <input type="text" readonly id="prepend-big-btn" disabled>
                            </div>
                        </div>
                        <br>
                        <div class="button-demo">
                            <button type="submit" class="btn btn-success  btn-lg waves-effect" onclick="return confirm('Are you sure you want to save?')">
                            Simpan Data
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection