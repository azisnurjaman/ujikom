@extends('layouts.dash')
@section('content')
                @role('admin')
                <center><a class="btn btn-primary" href="{{ route('detailpinjam.create') }}">Tambah Data</a></center>
                @endrole
                    <br>
                    <div class="table-responsive">
                       <table class="table table-hover" id="tab" style="width:100%">
                        <thead>
                        <tr class="bg-info">
                                <th>No</th>
                                <th>Kode Detail Peminjaman</th>
                                <th>Peminjaman Kode</th>
                                <th>Judul Buku</th>
                                <th>Detail Status Kembali</th>
                                <th>Detail Tanggal Kembali</th>
                                <th>Detail Denda</th>
                                @role('admin')
                                <th></th>
                                <th></th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody>
                            @php $no =1; @endphp
                            @foreach($detailpinjam as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->detailpinjam_kode }}</td>
                                <td>{{ $data->peminjaman->peminjaman_kode }}</td>
                                <td>{{ $data->buku->buku_judul }}</td>
                                <td>{{ $data->detail_status_kembali }}</td>
                                <td>{{ $data->peminjaman->peminjaman_tgl_kembali }}</td>
                                <td>{{ $data->detail_denda }}</td>
                                @role('admin')
                                <td><a href="{{ route('detailpinjam.edit', $data->id) }}" class="btn btn-warning">Edit Data</a></td>
                                <td><form action="{{ route('detailpinjam.destroy', $data->id) }}" method="post">
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
@endsection
@section('js')

@endsection