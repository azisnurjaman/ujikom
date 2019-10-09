@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('flash')
            <div class="card">
                <br>
                <center><a href="{{ route('kartupendaftaran.create') }}" class="btn bg-purple waves-effect">Tambah Data</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-hover">
                        <thead>
                            <tr class="bg-black">
                                <th>No</th>
                                <th>Kode kartu</th>
                                <th>Petugas</th>
                                <th>Peminjam</th>
                                <th>Tanggal Pembuatan Kartu</th>
                                <th>Tanggal Akhir Kartu</th>
                                <th>Status Aktif Kartu</th>
                                <th colspan="2" style="text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($kartupendaftaran as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->kartupendaftaran_kode }}</td>
                                <td>{{ $data->petugas->petugas_nama }}</td>
                                <td>{{ $data->peminjam->peminjam_nama }}</td>
                                <td>{{ $data->kartu_tanggal_pembuatan }}</td>
                                <td>{{ $data->kartu_tanggal_akhir }}</td>
                                <td>{{ $data->kartu_status_aktif }}</td>
                                <td><a href="{{ route('kartupendaftaran.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                <td><form action="{{ route('kartupendaftaran.destroy', $data->id) }}" method="post">
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