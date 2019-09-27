@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <br>
                <center><a href="{{ route('penerbit.create') }}" class="btn bg-purple waves-effect">Tambah Data</a></center>
                    <br>
                    <div class="table-responsive">
                    <table class="table table-hover">
                        <thead style="text-align:center;">
                            <tr class="bg-black">
                                <th>No</th>
                                <th>Kode Penerbit</th>
                                <th>Nama Penerbit</th>
                                <th>Alamat Penerbit</th>
                                <th>Telp Penerbit</th>
                                <th colspan="3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($penerbit as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->penerbit_kode }}</td>
                                <td>{{ $data->penerbit_nama }}</td>
                                <td>{{ $data->penerbit_alamat }}</td>
                                <td>{{ $data->penerbit_tlpn }}</td>
                                <td><a href="{{ route('penerbit.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                <td><a href="{{ route('penerbit.show', $data->id) }}" class="btn btn-info">Detail Data</a></td>
                                <td>
                                    <form action="{{ route('penerbit.destroy', $data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
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
