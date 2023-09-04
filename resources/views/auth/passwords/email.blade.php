@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h3 class="mb-4">Forgot Password</h3>
            <div class="card">
                <!-- <div class="card-header">{{ __('Reset Password') }}</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="col-wm-12  mb-4">
                          <div class="row mb-3 mt-4 mb-4 px-3">

                              <div class="col-sm-1"></div>
                              <div class="col-md-10">
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter email to recieve reset password link" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                          </div>

                          <div class="row mb-0 px-3">
                              <div class="col-sm-1"></div>
                              <div class="col-md-10">
                                  <button type="submit" class="btn btn-primary col-sm-12 py-3">
                                      {{ __('Send Password Reset Link') }}
                                  </button>
                              </div>
                          </div>

                          <div class="row mb-3 mt-3 px-3">
                              <div class="row">
                                <div class="col-sm-1"></div>
                                <div class="col-sm-4">
                                  <a type="submit" href="{{ route('login') }}" class="btn btn-link" style="float:left;">
                                    {{ __('Login') }}
                                  </a>
                                </div>
                                <div class="col-sm-4 mb-3"></div>
                                <div class="col-sm-3 text-left">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('register') }}" style="font-size:12px;float:left;">
                                            {{ __('Register') }}
                                        </a>
                                    @endif
                                </div>
                              </div>
                          </div>

                       </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
