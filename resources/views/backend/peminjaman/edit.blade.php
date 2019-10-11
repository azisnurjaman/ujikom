@role('admin')
@extends('layouts.dash')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        @csrf
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <b>Kode Peminjaman</b>
                                            <input name="peminjaman_kode" type="text" class="form-control" value="{{$peminjaman->peminjaman_kode}}" required/>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-line">
                                        <b>Petugas</b>
                                        <select required class="form-control" name="petugas_nama" id="1">
                                            @foreach($petugas as $data)
                                            <option value="{{ $data->id }}">{{ $data->petugas_nama }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <div class="form-line">
                                        <b>Peminjam</b>
                                        <select required class="form-control" name="peminjam_nama" id="2">
                                            @foreach($peminjam as $data)
                                            <option value="{{ $data->id }}">{{ $data->peminjam_nama }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <b>Tanggal Peminjaman</b>
                                    <div class="input-group"> 
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>                               
                                        <div class="form-line">
                                            <input name="peminjaman_tgl" type="date" class="form-control" value="{{$peminjaman->peminjaman_tgl}}" required/>
                                        </div>   
                                    </div>
                                    <b>Tanggal Harus Kembali Peminjaman</b>
                                    <div class="input-group"> 
                                        <span class="input-group-addon">
                                            <i class="material-icons">date_range</i>
                                        </span>                               
                                        <div class="form-line">
                                            <input name="peminjaman_tgl_kembali" type="date" class="form-control" value="{{$peminjaman->peminjaman_tgl_kembali}}" required/>
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