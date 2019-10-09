@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('flash')
            <div class="card">
                <br>
                <center><a href="{{ route('detailpinjam.create') }}" class="btn bg-purple waves-effect">Tambah Data</a></center>
                    <br>
                    <div class="table-responsive">
                       <table class="table table-hover">
                        <thead>
                        <tr class="bg-black">
                                <th>No</th>
                                <th>Kode Detail Peminjaman</th>
                                <th>Peminjaman Kode</th>
                                <th>Judul Buku</th>
                                <th>Detail Status Kembali</th>
                                <th>Detail Tanggal Kembali</th>
                                <th>Detail Denda</th>
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($detailpinjam as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->detailpinjam_kode }}</td>
                                <td>{{ $data->peminjaman->peminjaman_kode }}</td>
                                <td>{{ $data->buku->buku_judul }}</td>
                                <td>{{ $data->detail_status_kembali }}</td>
                                <td>{{ $data->peminjaman->peminjaman_tgl_kembali }}</td>
                                <td>{{ $data->detail_denda }}</td>
                                <td><a href="{{ route('detailpinjam.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                <td><form action="{{ route('detailpinjam.destroy', $data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn -sm btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete?')">Hapus Data</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection