@extends('layouts.app')
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  height: 100vh;
  background-size: 100% 100%;
  font-family: 'Anton', sans-serif;
  color: #fff;
}
.sbuttons {
  bottom: 35%;
  position: fixed;
  margin: 1em;
  left: 0;
}
.sbutton {
  display: block;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  text-align: center;
  color: white;
  margin-left: 80%;
  margin-top: 40%;
  box-shadow: 0px 5px 11px -2px rgba(0, 0, 0, 0.18), 0px 4px 12px -7px rgba(0, 0, 0, 0.15);
  cursor: pointer;
  position: relative;
}
</style>
</head>
<body>
@section('content')
<div class="sbuttons">
  <a href="#" target="_blank" class="sbutton twitt"><i class="fa fa-facebook-official" aria-hidden="true" style="position: absolute;top: 50%;left: 50%;height: 50%;transform: translate(-50%, -50%);width: 15px;height: 15px;display: block;color: blue;"></i></a>
  <a href="#" target="_blank" class="sbutton twitt"><i class="fa fa-twitter" aria-hidden="true" style="position: absolute;top: 50%;left: 50%;height: 50%;transform: translate(-50%, -50%);width: 15px;height: 15px;display: block;color: blue;"></i></a>
  <a href="#" target="_blank" class="sbutton twitt"><i class="fa fa-instagram" aria-hidden="true" style="position: absolute;top: 50%;left: 50%;height: 50%;transform: translate(-50%, -50%);width: 15px;height: 15px;display: block;color: blue;"></i></a>
</div>  
<br>
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</div>