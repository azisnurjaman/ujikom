@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman User</div>
                <br>
                <center><a href="{{ route('user.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($user as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->name }}</td>
                     <td>{{ $data->email }}</td>        
                    <td><a href="{{ route('user.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('user.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('user.destroy', $data->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection