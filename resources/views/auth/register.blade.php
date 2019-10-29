@extends('layouts.login')
@section('head')
    <title>Register</title>
@endsection
@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <span class="login100-form-title p-b-34 p-t-27">
        {{ __('Register') }}
    </span>
    <div class="wrap-input100 validate-input">
            <input id="name" placeholder="Name" type="text" class="input100 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input">
            <input id="email" placeholder="Email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input">
            <input id="password" placeholder="Password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    <div class="wrap-input100 validate-input">
            <input id="password-confirm" placeholder="Confirm Password" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>
    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn" onclick="return confirm('Are you sure you want to registration?')">
                {{ __('Register') }}
        </button>
    </div>
</form>
@endsection
