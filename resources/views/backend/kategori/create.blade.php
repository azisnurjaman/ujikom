@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Kategori</div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                                <label for="">Kode kategori</label>
                                <input class="form-control" type="text" name="kategori_kode">
                            </div>
                            <div class="form-group">
                                <label for="">Nama kategori</label>
                                <input class="form-control" type="text" name="kategori_nama">
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