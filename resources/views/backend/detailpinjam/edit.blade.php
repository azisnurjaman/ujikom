@role('admin')
@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('detailpinjam.update', $detailpinjam->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="row clearfix">
                                <div class="col-sm-12">
                                    <br>
                                    <div class="form-group-inner">
                                        <div class="form-line">
                                            <label>Kode Detail Peminjaman</label>
                                            <input name="detail_kode" type="text" class="form-control" required value="{{ $detailpinjam->detailpinjam_kode }}"/>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="form-line">
                                        <label>Kode Peminjaman</label>
                                        <select class="form-control" name="peminjaman_kode" id="1">
                                            @foreach($peminjaman as $data)
                                                <option value="{{ $data->id }}">{{ $data->peminjaman_kode }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group-inner">
                                        <div class="form-line">
                                        <label>Judul Buku</label>
                                        <select class="form-control" name="buku_judul" id="2">
                                            @foreach($buku as $data)
                                                <option value="{{ $data->id }}">{{ $data->buku_judul }}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <label>Status Peminjaman</label>
                                    <div class="form-group">
                                        <input class="with-gap" <?php echo ($detailpinjam->detail_status_kembali=='Dipinjam')?'checked':'' ?> type="radio" name="detail_status_kembali" id="exampleRadios1" value="Dipinjam">
                                        <label class="form-check-label" for="exampleRadios1">
                                            Dipinjam
                                        </label>
                                        <input class="with-gap" <?php echo ($detailpinjam->detail_status_kembali=='Selesai')?'checked':'' ?> type="radio" name="detail_status_kembali" id="exampleRadios2" value="Selesai">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Selesai
                                        </label>
                                    </div>
                                    <label>Detail Tanggal Kembali</label>
                                    <div class="form-group-inner">           
                                        <select class="form-control" name="detail_tgl_kembali" id="3">
                                            @foreach($peminjaman as $data)
                                                <option value="{{ $data->id }}">{{ $data->peminjaman_tgl_kembali }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <label>Detail Denda</label>
                                     <div class="form-group-inner">
                                            <div class="form-line">
                                                <input name="detail_denda" type="text" class="form-control" required value="{{ $detailpinjam->detail_denda }}"/>
                                            </div>
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