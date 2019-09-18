@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))                  
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center>
                        <h1>WELCOME  {{ Auth::role()->name }} {{ Auth::user()->name }}</h1>

                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
