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
                                    <div class="form-input-inner">
                                            <label>Kode Detail Peminjaman</label>
                                            <input name="detail_kode" type="text" class="form-control" required/>
                                    </div>
                                    <br>
                                    <div class="form-input-inner">
                                        <label>Kode Peminjaman</label>
                                        <select class="form-control" name="peminjaman_kode" id="1">
                                            <option value=""></option>
                                            @foreach($peminjaman as $data)
                                                <option value="{{ $data->id }}">{{ $data->peminjaman_kode }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-input-inner">
                                        <label>Judul Buku</label>
                                        <select class="form-control" name="buku_judul" id="2">
                                            <option value=""></option>
                                            @foreach($buku as $data)
                                                <option value="{{ $data->id }}">{{ $data->buku_judul }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <label>Status Peminjaman</label>
                                    <div class="form-group-inner">
                                        <div class="i-checks">
                                            <input type="radio" name="detail_status_kembali" id="exampleRadios1" value="Dipinjam">
                                            <label class="form-check-label" for="exampleRadios1">
                                                Dipinjam
                                            </label>
                                        </div>
                                        <div class="i-checks">
                                        <input type="radio" name="detail_status_kembali" id="exampleRadios2" value="Selesai">
                                            <label class="form-check-label" for="exampleRadios2">
                                                Selesai
                                            </label>
                                        </div>
                                        <hr>
                                    </div>
                                    <label>Detail Tanggal Kembali</label>
                                    <div class="form-input-inner">
                                        <select class="form-control" name="detail_tgl_kembali" id="3">
                                            <option value=""></option>
                                            @foreach($peminjaman as $data)
                                                <option value="{{ $data->id }}">{{ $data->peminjaman_tgl_kembali }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <label>Detail Denda</label>
                                     <div class="form-input-inner">
                                                <input name="detail_denda" type="text" class="form-control" required/>
                                            </div>
                                            <br>
                                        </div>
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