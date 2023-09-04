@extends('layouts.auth')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6 text-center">
        <h3 class="mb-4">LOGIN</h3>
            <div class="card">
                <!-- <div class="card-header">{{ __('Login') }}</div> -->

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 mt-4 px-3">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 px-3">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 px-3">
                            <div class="col-sm-1"></div>
                            <div class="col-sm-3">
                                <div class="form-check">
                                    <label class="form-check-label" for="remember">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-3 px-3">
                            <div class="row">
                              <div class="col-sm-1"></div>
                              <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary col-sm-12 py-2" style="float:left;">
                                  {{ __('Login') }}
                                </button>
                              </div>
                              <div class="col-sm-1 mb-3"></div>
                                <div class="col-sm-2 mb-3">
                                <a class="btn btn-link" href="{{ route('register') }}" style="font-size:12px;float:left;">
                                    {{ __('Sign-Up') }}
                                </a>
                              </div>
                              <div class="col-sm-4 text-left">
                                <a class="btn btn-link" href="{{ route('password.request') }}" style="font-size:12px;float:left;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                              </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
