@extends('layouts.auth')


@section('content')
   <div class="row justify-content-center" style="margin-top:-55px;">
        <div class="col-sm-8"></div>
        <div class="col-md-4 text-center">
            <h3 class="mb-4">Sign-Up</h3>
            <div class="card">

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12 mb-3">
                                <input id="firstname" name="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror"
                                 value="{{ old('firstname') }}" placeholder="Enter firstname" required autocomplete="firstname" autofocus style="height:45px;">
                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input id="surname" name="surname" type="text" class="form-control @error('surname') is-invalid @enderror"
                                 value="{{ old('surname') }}" placeholder="Enter surname" required autocomplete="surname" autofocus style="height:45px;">

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 mb-3">
                                <input id="phone" name="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                                value="{{ old('phone') }}" placeholder="Enter phone number" required autocomplete="firstname" autofocus style="height:45px;">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-12">
                               <input id="email" name="email" type="text" class="form-control @error('email') is-invalid @enderror"
                               value="{{ old('email') }}" placeholder="Enter email" required autocomplete="surname" autofocus style="height:45px;">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12 mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" placeholder="Enter Password" required autocomplete="new-password" style="height:45px;">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                placeholder="Re-Type your password" required autocomplete="new-password" style="height:45px;">
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-12 mb-3">
                            <button type="submit" class="btn btn-primary col-sm-12 py-2" style="float:left;">
                              {{ __('Register') }}
                            </button>
                          </div>
                          <div class="col-sm-12 text-left">
                              <a class="btn btn-link" href="{{ route('login') }}" class="col-sm-6" style="font-size:12px;float:left;">
                                  {{ __('Login') }}
                              </a>
                              <a class="btn btn-link" href="{{ route('password.request') }}" class="col-sm-6" style="font-size:12px;float:right;">
                                  {{ __('Forgot Password') }}
                              </a>
                          </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
