@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('flash')
            <div class="card">
                <br>
                @role('admin')
                <center><a href="{{ route('buku.create') }}" class="btn bg-purple waves-effect">Tambah Data</a></center>
                @endrole
                <br>
                <div class="table-responsive">
                    <table class="table table-hover" id="tab">
                        <thead>
                            <tr class="bg-black">
                                <th>No</th>
                                <th>Kode Buku</th>
                                <th>Judul Buku</th>
                                <th>Kategori Buku</th>
                                <th>Deskripsi Buku</th>
                                <th>Pengarang Buku</th>
                                <th>Penerbit Buku</th>
                                <th>Jumlah Buku</th>
                                <th>Tahun Terbit Buku</th>
                                <th colspan="3"th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($buku as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->buku_kode }}</td>
                                <td>{{ $data->buku_judul }}</td>
                                <td>{{ $data->kategori->kategori_nama }}</td>
                                <td>{!! substr($data->buku_deskripsi, 0, 100) !!}</td>
                                <td>{{ $data->buku_pengarang }}</td>
                                <td>{{ $data->penerbit->penerbit_nama }}</td>
                                <td>{{ $data->buku_jumlah }}</td>
                                <td>{{ $data->buku_tahun_terbit }}</td>
                                @role('admin')
                                <td><a href="{{ route('buku.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                @endrole
                                <td><a href="{{ route('buku.show', $data->id) }}" class="btn btn-info">Detail Data</a></td>
                                @role('admin')
                                <td>
                                    <form action="{{ route('buku.destroy', $data->id) }}" method="post">
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
</div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#tab').DataTable();
        });
    </script>
@endsection