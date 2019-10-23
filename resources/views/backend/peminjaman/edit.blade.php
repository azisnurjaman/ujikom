@role('admin')
@extends('layouts.dash')
@section('content')
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
                                    <div class="form-group-inner">
                                            <label>Kode Peminjaman</label>
                                            <input name="peminjaman_kode" type="text" class="form-control" value="{{$peminjaman->peminjaman_kode}}" required/>
                                    </div>
                                    <div class="form-group-inner">
                                        <label>Petugas</label>
                                        <select required class="form-control" name="petugas_nama" id="1">
                                            @foreach($petugas as $data)
                                            <option value="{{ $data->id }}">{{ $data->petugas_nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group-inner">
                                        <label>Peminjam</label>
                                        <select required class="form-control" name="peminjam_nama" id="2">
                                            @foreach($peminjam as $data)
                                            <option value="{{ $data->id }}">{{ $data->peminjam_nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label>Tanggal Peminjaman</label>
                                    <div class="form-group-inner">                                
                                            <input name="peminjaman_tgl" type="date" class="form-control" value="{{$peminjaman->peminjaman_tgl}}" required/>   
                                    </div>
                                    <label>Tanggal Harus Kembali Peminjaman</label>
                                    <div class="form-group-inner">                                
                                            <input name="peminjaman_tgl_kembali" type="date" class="form-control" value="{{$peminjaman->peminjaman_tgl_kembali}}" required/>   
                                    </div>
                                </div>
                            </div>
                            <br>
                                <button type="submit" class="btn btn-success  btn-lg waves-effect" onclick="return confirm('Are you sure you want to save?')">
                                    Simpan Data
                                </button>
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