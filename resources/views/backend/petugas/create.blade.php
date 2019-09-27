@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Petugas</div>
                <div class="card-body">
                    <form action="{{ route('petugas.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="form-group">
                            <label for="">Kode Petugas</label>
                            <input class="form-control" type="text" name="petugas_kode">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Petugas</label>
                            <input class="form-control" type="text" name="petugas_nama">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
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