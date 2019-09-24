@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <br>
                <center><a href="{{ route('user.create') }}" class="btn btn-primary">Tambah Data</a></center>
                <br>
                <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr class="bg-black">
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no =1; @endphp
                    @foreach($user as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td> 
                        <td><a href="{{ route('user.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                        <td>
                            <form action="{{ route('user.destroy', $data->id) }}" method="post">
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
@endsection