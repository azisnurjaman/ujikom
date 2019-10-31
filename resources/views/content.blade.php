@extends('layouts.index')
@section('content')
@foreach($buku as $data)						
<div class="single-course item">
    <a href="/detail/{{$data->id}}">
        <img height="500px" width="25px" src="{{ asset('assets/img/buku/'.$data->buku_foto) }}" alt="">
    </a>
    <div class="details">
        <a href="/detail/{{$data->id}}"><h4>{{ $data->buku_judul }}</h4></a>	
        <p>
        {!! substr($data->buku_deskripsi, 0, 100) !!}
        </p>
    </div>
</div>
@endforeach
@endsection