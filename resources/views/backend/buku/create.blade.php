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
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };
    </script>
    <script>
       CKEDITOR.replace('ck', options);
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