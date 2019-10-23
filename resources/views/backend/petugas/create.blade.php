@role('admin')
@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('petugas.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group-inner">
                                            <label>Kode Petugas</label>
                                            <input name="petugas_kode" type="text" class="form-control" required/>
                                    </div>
                                    <div class="form-group-inner">
                                            <label>Nama Petugas</label>
                                            <input name="petugas_nama" type="text" class="form-control" required/>
                                    </div>
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
@endrole