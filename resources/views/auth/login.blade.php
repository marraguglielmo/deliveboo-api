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
                        <div class="logo-box">
                            <img src="{{ Vite::asset('resources/img/logo_1_def.png') }}">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-box">
                                <div class="mb-4 row">

                                    <div class="col-md-12 input-col d-flex align-items-center justify-content-center">

                                        {{-- email --}}
                                        <div class="input-box input-email d-flex align-items-center justify-content-center">
                                            <div class="input-icon">
                                                <i class="fa-solid fa-envelope"></i>
                                            </div>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                                placeholder="Email">
                                        </div>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- email --}}

                                    </div>
                                    <small id="error-email" class="text-danger fw-semibold d-block text-center"></small>
                                </div>

                                <div class="mb-4 row">

                                    <div class="col-md-12 input-col d-flex align-items-center justify-content-center">

                                        {{-- password --}}
                                        <div
                                            class="input-box input-password d-flex align-items-center justify-content-center">


                                            <div class="input-icon">
                                                <i class="fa-solid fa-lock"></i>
                                            </div>
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Password">


                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        {{-- password --}}
                                    </div>
                                    <small id="error-password" class="text-danger fw-semibold d-block text-center"></small>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12 btn-container">
                                    <div class="d-flex flex-column">

                                        <button type="submit" id="btn-login"
                                            class="btn btn-custom-primary-outline m-auto mb-4">
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

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            const btnLogin = document.getElementById('btn-login');

            // input
            const inputEmail = document.querySelector('.input-email');
            const inputPassword = document.querySelector('.input-password');

            // email
            const email = document.getElementById('email');
            const errorEmail = document.getElementById('error-email');
            // password
            const password = document.getElementById('password');
            const errorPassword = document.getElementById('error-password');

            btnLogin.addEventListener('click', function(event) {
                resetErrors();
                event.preventDefault();
                let isValid = true;

                // validazione email
                let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (email.value.trim().length === 0) {
                    errorEmail.innerHTML = 'Il campo Email è obbligatorio';
                    email.classList.add('is-invalid');
                    inputEmail.classList.add('is_invalid');
                    isValid = false;
                } else if (!emailPattern.test(email.value)) {
                    errorEmail.innerHTML = 'Inserisci un indirizzo email valido';
                    email.classList.add('is-invalid');
                    inputEmail.classList.add('is_invalid');
                    isValid = false;
                } else if (email.value.trim().length > 50) {
                    errorEmail.innerHTML = 'Il campo Email non deve essere più lungo di 50 caratteri';
                    email.classList.add('is-invalid');
                    inputEmail.classList.add('is_invalid');
                    isValid = false;
                }

                // Validazione password
                let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

                if (password.value.trim().length === 0) {
                    errorPassword.innerHTML = 'Il campo Password è obbligatorio';
                    password.classList.add('is-invalid');
                    inputPassword.classList.add('is_invalid');
                    isValid = false;
                } else if (password.value.trim().length < 8) {
                    errorPassword.innerHTML = 'Il campo Password deve contenere  almeno 8 caratteri';
                    password.classList.add('is-invalid');
                    inputPassword.classList.add('is_invalid');
                }
                // else if (!passwordPattern.test(password.value)) {
                //     errorPassword.innerHTML =
                //         'La password deve contenere almeno 8 caratteri, un numero e un carattere speciale';
                //     password.classList.add('is-invalid');
                //     isValid = false;
                // }


                // Se tutti i campi sono validi, invia il form
                if (isValid) {
                    event.target.closest('form').submit();
                }


            });


            function resetErrors() {
                const errorMessages = document.querySelectorAll('.invalid-feedback');
                const invalidInputs = document.querySelectorAll('.is-invalid');
                const smallTags = document.querySelectorAll('small');

                smallTags.forEach((error) => error.innerHTML = '');
                errorMessages.forEach((error) => error.innerHTML = '');
                invalidInputs.forEach((input) => input.classList.remove('is-invalid'));

            }

        })
    </script>
@endsection
