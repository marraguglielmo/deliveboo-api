@extends('layouts.app')

@section('content')
    <div class="container-fluid login_container d-flex flex-column justify-content-center align-items-center h-100 vh-100">
        <div class="row justify-content-center mb-2 w-100">
            <div class="btn-container text-end col-md-8">
                <a href="{{ env('APP_FRONTEND_URL') }}" class="btn btn-custom-secondary w-auto">Vai al sito
                    pubblico</a>
            </div>
        </div>
        <div class="row justify-content-center w-100">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body h-100 d-flex flex-column">
                        <div class="logo-box mb-4">
                            <img src="{{ Vite::asset('resources/img/logo_1_def.png') }}">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-box">
                                <div class="mb-4 row">

                                    <div class="col-md-12 input-col d-flex align-items-center justify-content-center">

                                        {{-- email --}}
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
                                        {{-- email --}}

                                    </div>
                                </div>

                                <div class="mb-4 row">

                                    <div class="col-md-12 input-col d-flex align-items-center justify-content-center">

                                        {{-- password --}}
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
                                        {{-- password --}}
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 btn-container">
                                    <div class="d-flex flex-column">

                                        <button type="submit" class="btn btn-custom-primary-outline m-auto mb-4">
                                            {{ __('Login') }}
                                        </button>
                                        <div class="m-auto text-center">
                                            <p class="mb-1 text-white">Non hai un account?</p>
                                            <a href="{{ route('register') }}" class="btn btn-custom-primary-outline w-auto">
                                                {{ __('Crea nuovo account') }}
                                            </a>
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
