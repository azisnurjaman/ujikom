@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('flash')
            <div class="card">
                @role('admin')
                <center><a href="{{ route('kartupendaftaran.create') }}" class="btn btn-primary">Tambah Data</a></center>
                @endrole
                    <br>
                    <div class="table-responsive">
                        <table class="table table-hover" id="tab">
                        <thead>
                            <tr class="bg-info">
                                <th>No</th>
                                <th>Kode kartu</th>
                                <th>Petugas</th>
                                <th>Peminjam</th>
                                <th>Tanggal Pembuatan Kartu</th>
                                <th>Tanggal Akhir Kartu</th>
                                <th>Status Aktif Kartu</th>
                                @role('admin')
                                <th></th>
                                <th></th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($kartupendaftaran as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>KP{{ $data->kartupendaftaran_kode }}</td>
                                <td>{{ $data->petugas->petugas_nama }}</td>
                                <td>{{ $data->peminjam->peminjam_nama }}</td>
                                <td>{{ $data->kartu_tanggal_pembuatan }}</td>
                                <td>{{ $data->kartu_tanggal_akhir }}</td>
                                <td>{{ $data->kartu_status_aktif }}</td>
                                @role('admin')
                                <td style="text-align:center"><a href="{{ route('kartupendaftaran.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                <td style="text-align:center"><form action="{{ route('kartupendaftaran.destroy', $data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn -sm btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete?')">Hapus Data</button>
                                </form>
                                </td>
                                @endrole
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection