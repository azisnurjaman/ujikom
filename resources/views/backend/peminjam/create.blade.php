@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('peminjam.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <b>Kode Peminjam</b>
                            <div class="form-line">
                                <input required class="form-control" type="text" name="peminjam_kode">
                            </div>
                        </div>
                        <div class="input-group">
                            <b>Nama Peminjam</b>
                            <div class="form-line">
                                <input required class="form-control" type="text" name="peminjam_nama">
                            </div>
                        </div>
                        <div class="input-group">
                            <b>Alamat Peminjam</b>
                            <div class="form-line">
                                <textarea required id="" class="form-control" name="peminjam_alamat" rows="10" cols="50"></textarea>
                            </div>
                        </div>
                        <b>Telp Peminjam</b>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">phone</i>
                            </span>
                            <div class="form-line">
                                <input required class="form-control" type="number" name="peminjam_telp">
                            </div>
                        </div>
                        <div class="input-group">
                            <b>Foto</b>
                            <div class="form-line">
                                <input required type="file" class="form-control" name="peminjam_foto">
                            </div>
                        </div>
                        <div class="button-demo">
                            <button type="submit" class="btn btn-success  btn-lg waves-effect" onclick="return confirm('Are you sure you want to save?')">
                            <i class="material-icons">save</i>
                            <span>Simpan Data</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection