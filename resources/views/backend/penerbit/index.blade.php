@role('admin')
@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('flash')
            <div class="card">
                <center><a href="{{ route('penerbit.create') }}" class="btn btn-primary">Tambah Data</a></center>
                <br>
                <div class="table-responsive">
                    <table class="table table-hover" id="tab">
                        <thead>
                            <tr class="bg-info">
                                <th>No</th>
                                <th>Kode Penerbit</th>
                                <th>Nama Penerbit</th>
                                <th>Alamat Penerbit</th>
                                <th>Telp Penerbit</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($penerbit as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>PT{{ $data->penerbit_kode }}</td>
                                <td>{{ $data->penerbit_nama }}</td>
                                <td>{{ $data->penerbit_alamat }}</td>
                                <td>{{ $data->penerbit_tlpn }}</td>
                                <td><a href="{{ route('penerbit.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                <td><a href="{{ route('penerbit.show', $data->id) }}" class="btn btn-info">Detail Data</a></td>
                                <td>
                                    <form action="{{ route('penerbit.destroy', $data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn -sm btn-danger" type="submit" onclick="return confirm('Are you sure you want to delete?')" >Hapus Data</button>
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
</div>
@endsection
@endrole