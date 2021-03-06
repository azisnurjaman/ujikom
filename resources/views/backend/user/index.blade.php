@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <br>
                <div class="table-responsive">
                <table class="table table-hover" id="tab">
                    <thead>
                        <tr class="bg-info">
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $no =1; @endphp
                    @foreach($user as $data)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td> 
                        @role('admin')
                        <td style="text-align:center">
                            <form action="{{ route('user.destroy', $data->id) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
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