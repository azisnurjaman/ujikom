@extends('layouts.dash')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('flash')
            <div class="card">
                <div class="card-body">
                    @role('admin')
                    <center><a class="btn btn-primary" href="{{ route('buku.create') }}">Tambah Data</a></center>
                    @endrole
                    <br>
                    <div class="table-responsive">
                    <table class="table table-hover" id="tab" style="width:100%">
                        <thead>
                            <tr class="bg-info">
                                <th>No</th>
                                <th>Kode Buku</th>
                                <th>Thumbnail Buku</th>
                                <th>Judul Buku</th>
                                <th>Kategori</th>
                                <th>Deskripsi Buku</th>
                                <th>Pengarang</th>
                                <th>Penerbit</th>
                                <th>Jumlah Buku</th>
                                <th>Tahun Terbit</th>
                                <th></th>
                                @role('admin')
                                <th></th>
                                <th></th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($buku as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>B{{ $data->buku_kode }}</td>
                                <td><img src="{{ asset('assets/img/buku/'.$data->buku_foto) }}" alt="" height="100px" width="150px"></td>
                                <td>{{ $data->buku_judul }}</td>
                                <td>{{ $data->kategori->kategori_nama }}</td>
                                <td>{!! substr($data->buku_deskripsi, 0, 50) !!}</td>
                                <td>{{ $data->buku_pengarang }}</td>
                                <td>{{ $data->penerbit->penerbit_nama }}</td>
                                <td>{{ $data->buku_jumlah }}</td>
                                <td>{{ $data->buku_tahun_terbit }}</td>
                                @role('admin')
                                <td style="text-align:center"><a href="{{ route('buku.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                @endrole
                                <td style="text-align:center"><a href="{{ route('buku.show', $data->id) }}" class="btn btn-info">Detail Data</a></td>
                                @role('admin')
                                <td style="text-align:center">
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
</div>
@endsection
@section('js')

@endsection