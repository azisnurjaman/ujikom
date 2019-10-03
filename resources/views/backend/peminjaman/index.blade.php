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
                        <table class="table table-hover display responsive nowrap">
                        <thead>
                        <tr class="bg-black">
                                <th>No</th>
                                <th>Kode Peminjaman</th>
                                <th>Petugas</th>
                                <th>Peminjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Harus Kembali Peminjaman</th>
                                <th>Status Kartu</th>
                                <th clospan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                @php $no =1; @endphp
                @foreach($peminjaman as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->peminjaman_kode }}</td>
                    <td>{{ $data->petugas->petugas_nama }}</td>
                    <td>{{ $data->peminjam->peminjam_nama }}</td>
                    <td>{{ $data->peminjaman_tgl }}</td>
                    <td>{{ $data->peminjamana_tgl_kembali }}</td>
                    <td>{{ $data->kartu_status_aktif }}</td>
                    <td><a href="{{ route('peminajaman.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('peminajaman.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('peminajaman.destroy', $data->id) }}" method="post">
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