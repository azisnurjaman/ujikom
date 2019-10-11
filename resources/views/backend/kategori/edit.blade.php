@role('admin')
@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kategori.update', $kategori->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <br>
                                <div class="form-group">
                                    <div class="form-line">
                                        <b>Kode Kategori</b>
                                        <input name="kategori_kode" type="text" class="form-control" required value="{{$kategori->kategori_kode}}"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <b>Nama Kategori</b>
                                        <input name="kategori_nama" type="text" class="form-control" required value="{{$kategori->kategori_nama}}"/>
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
@endrole