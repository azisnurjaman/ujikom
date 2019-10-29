@extends('layouts.login')
@section('head')
    <title>Reset Password</title>
@endsection
@section('content')
<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <span class="login100-form-title p-b-34 p-t-27">
        {{ __('Reset Password') }}
    </span>
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="wrap-input100 validate-input">
            <input placeholder="Email" id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input">
            <input placeholder="Password" id="password" type="password" class="input100 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    <div class="wrap-input100 validate-input">
            <input placeholder="Confirm Password" id="password-confirm" type="password" class="input100" name="password_confirmation" required autocomplete="new-password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    <div class="container-login100-form-btn">
        <button type="submit" class="login100-form-btn">
            {{ __('Reset Password') }}
        </button>
    </div>
</form>
@endsection
