@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @if (session('status'))                  
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <center>
                <img src="/admin/images/welcome.png" alt="" >
            </center>
        </div>
    </div>
</div>
@endsection
