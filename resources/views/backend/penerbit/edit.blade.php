@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('penerbit.update', $penerbit->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="form-group-inner">
                                            <label>Kode Penerbit</label>
                                            <input name="penerbit_kode" type="text" class="form-control" required value="{{ $penerbit->penerbit_kode }}"/>
                                    </div>
                                    <div class="form-group-inner">
                                            <label>Nama Penerbit</label>
                                            <input name="penerbit_nama" type="text" class="form-control" required value="{{ $penerbit->penerbit_nama }}"/>
                                    </div>
                                    <div class="form-group-inner">
                                            <label>Alamat Penerbit</label>
                                            <textarea class="form-control no-resize" name="penerbit_alamat" id="" cols="30" rows="5" required>{{ $penerbit->penerbit_alamat }}</textarea>
                                    </div>
                                     <div class="form-group-inner">
                                            <label>Telepon Penerbit</label>
                                            <input class="form-control mobile-phone-number" type="text" name="penerbit_telp" required value="{{ $penerbit->penerbit_tlpn }}">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="button-demo">
                                <button type="submit" class="btn btn-success  btn-lg waves-effect" onclick="return confirm('Are you sure you want to delete?')">
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
