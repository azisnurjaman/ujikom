@extends('layouts.login')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <span class="login100-form-logo">
        <i class="zmdi zmdi-landscape"></i>
    </span>

    <span class="login100-form-title p-b-34 p-t-27">
        {{ __('Login') }}
    </span>

    <div class="wrap-input100 validate-input" data-validate = "Enter email">
        <input class="input100" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="focus-input100" data-placeholder="&#xf207;"></span>
    </div>

    <div class="wrap-input100 validate-input" data-validate="Enter password">
        <input class="input100" type="password" name="password" placeholder="Password" required autocomplete="current-password">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <span class="focus-input100" data-placeholder="&#xf191;"></span>
    </div>

    {{--  <div class="contact100-form-checkbox">
        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
        <label class="label-checkbox100" for="ckb1">
            Remember me
        </label>
    </div>  --}}

    <div class="container-login100-form-btn">
        {{--  <button class="">
            Login
        </button>  --}}
        <button type="submit" class="login100-form-btn">
            {{ __('Login') }}
        </button>
    </div>

    {{--  
        <a class="txt1" href="/login/#">
            Forgot Password?
        </a>
    </div>  --}}
    <div class="text-center p-t-25">
    @if (Route::has('password.request'))
        <a class="txt1" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
    </div>
</form>
@endsection
