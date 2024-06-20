@extends('layouts.app')

@section('content')
    <div class="container-fluid login_container mt-4 vh-100 d-flex justify-content-center align-items-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body py-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-box">
                                <div class="mb-4 row">
                                    {{-- <label for="email"
                                        class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                                    <div class="col-md-12 d-flex align-items-center justify-content-center">

                                        <div class="input-box d-flex align-items-center justify-content-center">
                                            <div class="input-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="mb-4 row">
                                    {{-- <label for="password"
                                        class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                                    <div class="col-md-12 d-flex align-items-center justify-content-center">

                                        <div class="input-box d-flex align-items-center justify-content-center">


                                            <div class="input-icon">
                                                <i class="fa-solid fa-lock"></i>
                                            </div>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 btn-container d-flex">
                                    <button type="submit" class="btn btn-primary m-auto">
                                        {{ __('Login') }}
                                    </button>

                                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
