@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('petugas.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Kode Petugas</b>
                                            <input name="petugas_kode" type="text" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <b>Nama Petugas</b>
                                            <input name="petugas_nama" type="text" class="form-control" required/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button-demo">
                                <button type="submit" class="btn btn-success  btn-lg waves-effect">
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