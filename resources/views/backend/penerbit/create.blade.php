@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('penerbit.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Kode Penerbit</b>
                                            <input name="penerbit_kode" type="text" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Nama Penerbit</b>
                                            <input name="penerbit_nama" type="text" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Alamat Penerbit</b>
                                            <textarea class="form-control no-resize" name="penerbit_nama" id="" cols="30" rows="5" required></textarea>
                                        </div>
                                    </div>
                                     <div class="form-group">  
                                        <div class="form-line">
                                            <b>Telepon Penerbit</b>
                                            <input class="form-control mobile-phone-number" type="number" name="penerbit_telp">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info">
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