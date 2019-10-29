@extends('layouts.login')
@section('head')
    <title>Reset Password</title>
@endsection
@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<form method="POST" action="{{ route('password.email') }}">
    @csrf
    <span class="login100-form-title p-b-34 p-t-27">
        {{ __('Reset Password') }}
    </span>
    <div class="wrap-input100 validate-input">
        <input id="email" placeholder="Email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn" onclick="return confirm('Are you sure it's your email?')">
            {{ __('Send Password Reset Link') }}
        </button>
    </div>
</form>
@endsection
