@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <div class="input-group">  
                            <center>
                                <img src="{{ asset('assets/img/peminjam/'.$peminjam->peminjam_foto) }}" alt="" height="50%" width="100%">
                            </center>
                        </div>
                        <div class="input-group">
                            <b>Kode Peminjam</b>
                            <div class="form-line">
                                <input class="form-control" disabled type="text" name="peminjam_kode" value="{{$peminjam->peminjam_kode}}">
                            </div>
                        </div>
                        <div class="input-group">
                            <b>Nama Peminjam</b>
                            <div class="form-line">
                                <input class="form-control" disabled type="text" name="peminjam_nama" value="{{$peminjam->peminjam_nama}}">
                            </div>
                        </div>
                        <div class="input-group">
                            <b>Alamat Peminjam</b>
                            <div class="form-line">
                                <textarea id="" class="form-control" name="peminjam_alamat" rows="10" cols="50" disabled>{{$peminjam->peminjam_alamat}}</textarea>
                            </div>
                        </div>
                        <b>Telp Peminjam</b>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="material-icons">phone</i>
                            </span>
                            <div class="form-line">
                                <input class="form-control" disabled type="number" name="peminjam_telp" value="{{$peminjam->peminjam_tlpn}}">
                            </div>
                        </div>       
                        <form action="/backend/peminjam">
                        <div class="button-demo">
                            <button type="submit" class="btn btn-danger  btn-lg waves-effect" onclick="return confirm('Are you sure you want to go back?')">
                            Kembali
                            </button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection