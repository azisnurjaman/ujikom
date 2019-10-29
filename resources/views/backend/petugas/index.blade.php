@role('admin')
@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('flash')
            <div class="card">
            <center><a href="{{ route('petugas.create') }}" class="btn btn-primary">Tambah Data</a></center>
            <br>
            <div class="table-responsive">
                <table class="table table-hover" id="tab">
                    <thead>
                    <tr class="bg-info">
                        <th>No</th>
                        <th>Kode Petugas</th>
                        <th>Nama Petugas</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no =1; @endphp
                        @foreach($petugas as $data)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>PS{{ $data->petugas_kode }}</td>
                            <td>{{ $data->petugas_nama }}</td>       
                            <td style="text-align:center"><a href="{{ route('petugas.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                            <td style="text-align:center">
                                <form action="{{ route('petugas.destroy', $data->id) }}" method="post">
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
@endrole