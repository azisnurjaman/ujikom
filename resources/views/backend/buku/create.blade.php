@role('admin')
@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Kode Buku</label>
                                            <input name="buku_kode" type="text" class="form-control" required/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Judul Buku</label>
                                            <input name="buku_judul" type="text" class="form-control" required/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Deskripsi Buku</label>
                                            <textarea class="ckeditor" name="buku_deskripsi" id="ck" cols="30" rows="5" required></textarea>
                                    </div>
                                    <br>
                                     <div class="from-group-inner">  
                                            <label>Jumlah Buku</label>
                                            <input class="form-control mobile-phone-number" type="number" name="buku_jumlah" required>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Pengarang Buku</label>
                                            <input name="buku_pengarang" type="text" class="form-control" required/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Tahun Terbit Buku</label>                                
                                            <input name="buku_tahun_terbit" type="date" class="form-control" required/>
                                    </div>
                                    <br>   
                                    <div class="form-group-inner">
                                        <label>Kategori Buku</label>
                                            <select class="form-control" name="kategori_nama" id="1" required>
                                                <option value=""></option>
                                                @foreach($kategori as $data)
                                                <option value="{{ $data->id }}">{{ $data->kategori_nama }}</option>
                                                @endforeach
                                            </select>
                                            <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="i-checks pull-left">
                                                                                <label>
																						<input type="radio" value="option1" name="a"> <i></i> Option one </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                            <div class="i-checks pull-left">
                                                                                <label>
																						<input type="radio" checked="" value="option2" name="a"> <i></i> Option two checked </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <label>Penerbit Buku</label>
                                            <select class="form-control" name="penerbit_nama" id="2" required>
                                                <option value=""></option>
                                                @foreach($penerbit as $data)
                                                <option value="{{ $data->id }}">{{ $data->penerbit_nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="button-demo">
                                <button type="submit" class="btn btn-success btn-lg" onclick="return confirm('Are you sure you want to save?')">
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
@section('js')
    <script>
        CKEDITOR.replace( 'ck' );
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