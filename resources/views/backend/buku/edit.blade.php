@role('admin')
@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Kode Buku</label>
                                            <input name="buku_kode" type="text" class="form-control" required value="{{$buku->buku_kode}}"/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Judul Buku</label>
                                            <input name="buku_judul" type="text" class="form-control" required value="{{$buku->buku_judul}}"/>
                                    </div>
                                    <br>
                                    <label>Foto</label>  
                                    <span class="input-group-addon">
                                        <img src="{{ asset('assets/img/buku/'.$buku->buku_foto) }}" alt="" height="100px" width="150px">
                                    </span> 
                                    <div class="file-upload-inner ts-forms">
                                        <div class="input prepend-big-btn">
                                            <label class="icon-right" for="prepend-big-btn">
                                                <i class="fa fa-download"></i>
                                            </label>
                                                <div class="file-button">
                                                    Chose Photo
                                                    <input required type="file" class="form-control" name="buku_foto" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                </div>
                                            <input type="text" readonly id="prepend-big-btn" disabled>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Deskripsi Buku</label>
                                            <textarea class="ckeditor" name="buku_deskripsi" id="ck" cols="30" rows="5" required>{{$buku->buku_deskripsi}}</textarea>
                                    </div>
                                    <br>
                                     <div class="from-group-inner">  
                                            <label>Jumlah Buku</label>
                                            <input class="form-control mobile-phone-number" type="number" name="buku_jumlah" required value="{{$buku->buku_jumlah}}"/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Pengarang Buku</label>
                                            <input name="buku_pengarang" type="text" class="form-control" required value="{{$buku->buku_pengarang}}"/>
                                    </div>
                                    <br>
                                    <div class="from-group-inner">
                                            <label>Tahun Terbit Buku</label>                                
                                            <input name="buku_tahun_terbit" type="date" class="form-control" required value="{{$buku->buku_tahun_terbit}}"/>
                                    </div>
                                    <br>   
                                    <div class="form-group-inner">
                                        <label>Kategori Buku</label>
                                            <select class="form-control" name="kategori_nama" id="1" required>
                                                @foreach($kategori as $data)
                                                <option value="{{ $data->id }}">{{ $data->kategori_nama }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group-inner">
                                        <label>Penerbit Buku</label>
                                            <select class="form-control" name="penerbit_nama" id="2" required>
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