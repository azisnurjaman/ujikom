@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Petugas</div>
                <div class="card-body">
                    <form action="{{ route('petugas.update', $petugas->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Kode Petugas</b>
                                            <input name="petugas_kode" type="text" class="form-control" required value="{{ $petugas->petugas_kode }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Nama Petugas</b>
                                            <input name="petugas_nama" type="text" class="form-control" required value="{{ $petugas->petugas_nama }}"/>
                                        </div>
                                    </div>
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