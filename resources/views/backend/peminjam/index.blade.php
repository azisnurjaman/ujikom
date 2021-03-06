@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('flash')
            <div class="card">
                <center><a href="{{ route('peminjam.create') }}" class="btn btn-primary">Tambah Data</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-hover" id="tab">
                        <thead>
                        <tr class="bg-info">
                                <th>No</th>
                                <th>Kode Peminjam</th>
                                <th>Nama Peminjam</th>
                                <th>Alamat Peminjam</th>
                                <th>Telp Peminjam</th>
                                <th>Foto Peminjam</th>
                                <th></th>
                                @role('admin')
                                <th></th>
                                <th></th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                @php $no =1; @endphp
                @foreach($peminjam as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>PM{{ $data->peminjam_kode }}</td>
                    <td>{{ $data->peminjam_nama }}</td>
                    <td>{{ $data->peminjam_alamat }}</td>
                    <td>{{ $data->peminjam_tlpn }}</td>
                    <td><img src="{{ asset('assets/img/peminjam/'.$data->peminjam_foto) }}" alt="" height="100px" width="150px"></td>    
                    @role('admin')     
                    <td style="text-align:center"><a href="{{ route('peminjam.edit', $data->id) }}" class="btn btn-warning">Edit Data</a>
                    @endrole
                    <td style="text-align:center"><a href="{{ route('peminjam.show', $data->id) }}" class="btn btn-info">Detail Data</a>
                    @role('admin')
                    <td style="text-align:center"><form action="{{ route('peminjam.destroy', $data->id) }}" method="post">
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