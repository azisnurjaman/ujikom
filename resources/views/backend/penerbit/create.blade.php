@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('penerbit.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="form-group-inner">
                                            <label>Kode Penerbit</label>
                                            <input name="penerbit_kode" type="text" class="form-control" required/>
                                    </div>
                                    <div class="form-group-inner">
                                            <label>Nama Penerbit</label>
                                            <input name="penerbit_nama" type="text" class="form-control" required/>
                                    </div>
                                    <div class="form-group-inner">
                                            <label>Alamat Penerbit</label>
                                            <textarea class="form-control no-resize" name="penerbit_alamat" id="" cols="30" rows="5" required></textarea>
                                    </div>
                                    <label>Telepon Penerbit</label>
                                     <div class="form-group-inner">  
                                            <input class="form-control mobile-phone-number" type="text" name="penerbit_telp" required>
                                        
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="button-demo">
                                <button type="submit" class="btn btn-success  btn-lg waves-effect" onclick="return confirm('Are you sure you want to save?')">
                                Simpan Data
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