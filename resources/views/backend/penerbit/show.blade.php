@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    
                        @csrf
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Kode Penerbit</b>
                                            <input name="penerbit_kode" type="text" class="form-control" disabled value="{{ $penerbit->penerbit_kode }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Nama Penerbit</b>
                                            <input name="penerbit_nama" type="text" class="form-control" disabled value="{{ $penerbit->penerbit_nama }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Alamat Penerbit</b>
                                            <textarea class="form-control no-resize" name="penerbit_alamat" id="" cols="30" rows="5" disabled>{{ $penerbit->penerbit_alamat }}</textarea>
                                        </div>
                                    </div>
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone</i>
                                        </span>  
                                        <div class="form-line">
                                            <b>Telepon Penerbit</b>
                                            <input class="form-control mobile-phone-number" type="number" name="penerbit_telp" disabled value="{{ $penerbit->penerbit_tlpn }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="/backend/penerbit">
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