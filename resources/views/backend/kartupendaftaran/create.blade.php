@extends('layouts.dash')
@role('admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('kartupendaftaran.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                        <div class="form-group-inner">
                                            
                                                <label>Kode Kartu</label>
                                                <input name="kartupendaftaran_kode" type="text" class="form-control" required/>
                                            
                                        </div>
                                        <div class="form-group-inner">
                                            
                                            <label>Nama Petugas</label>
                                            <select class="form-control" name="petugas_nama" id="1">
                                                <option value="">-- Please select --</option>
                                                @foreach($petugas as $data)
                                                    <option value="{{ $data->id }}">{{ $data->petugas_nama }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                        <div class="form-group-inner">
                                            
                                            <label>Nama Peminjam</label>
                                            <select class="form-control" name="peminjam_nama" id="2">
                                                <option value="">-- Please select --</option>
                                                @foreach($peminjam as $data)
                                                    <option value="{{ $data->id }}">{{ $data->peminjam_nama }}</option>
                                                @endforeach
                                            </select>
                                            
                                        </div>
                                        <label>Tanggal Pembuatan Kartu</label>
                                        <div class="form-group-inner">            
                                            <input name="kartu_tgl_pembuatan" type="date" class="form-control" required/>
                                        </div>
                                        <label>Tanggal Akhir Kartu</label>
                                        <div class="form-group-inner">            
                                            <input name="kartu_tgl_akhir" type="date" class="form-control" required/>
                                        </div>
                                        <label>Status Kartu</label>
                                        <div class="form-group">
                                            <div class="i-checks">
                                            <input class="with-gap" type="radio" name="kartu_status_aktif" id="on" value="Aktif">
                                            <label class="form-check-label" for="on">
                                                Aktif
                                            </label>
                                            </div>
                                            <div class="i-checks">
                                            <input class="with-gap" type="radio" name="kartu_status_aktif" id="off" value="Tidak Aktif">
                                            <label class="m-l-20" for="off">
                                                Tidak Aktif
                                            </label>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            </div>
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
@endrole
@section('js')
    <script>
        $("#3").select2({
            placeholder: "Select a State",
            allowClear: true
        });
    </script>
    <script>
        $("#1").select2({
            placeholder: "Select a State",
            allowClear: true
        });
    </script>
    <script>
        $("#2").select2({
            placeholder: "Select a State",
            allowClear: true
        });
    </script>
@endsection