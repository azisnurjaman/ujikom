@role('admin')
@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('detailpinjam.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <b>Kode Detail Peminjaman</b>
                                            <input name="detail_kode" type="text" class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-line">
                                        <b>Kode Peminjaman</b>
                                        <select class="form-control" name="peminjaman_kode" id="1">
                                            <option value="">-- Please select --</option>
                                            @foreach($peminjaman as $data)
                                                <option value="{{ $data->id }}">{{ $data->peminjaman_kode }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-line">
                                        <b>Judul Buku</b>
                                        <select class="form-control" name="buku_judul" id="2">
                                            <option value="">-- Please select --</option>
                                            @foreach($buku as $data)
                                                <option value="{{ $data->id }}">{{ $data->buku_judul }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <b>Status Peminjaman</b>
                                    <div class="form-group">
                                        <input class="with-gap" type="radio" name="detail_status_kembali" id="exampleRadios1" value="Dipinjam">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Dipinjam
                                        </label>
                                        <input class="with-gap" type="radio" name="detail_status_kembali" id="exampleRadios2" value="Selesai">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Selesai
                                        </label>
                                    </div>
                                    <b>Detail Tanggal Kembali</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>            
                                        <select class="form-control" name="detail_tgl_kembali" id="3">
                                            <option value="">-- Please select --</option>
                                            @foreach($peminjaman as $data)
                                                <option value="{{ $data->id }}">{{ $data->peminjaman_tgl_kembali }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <b>Detail Denda</b>
                                     <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span> 
                                            <div class="form-line">
                                                <input name="detail_denda" type="text" class="form-control" required/>
                                            </div>
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
                            <br>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
@endsection
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
@endrole