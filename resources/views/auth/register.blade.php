@extends('layouts.app')

@section('content')
    <div class="logo-box-register">
        <img src="{{ Vite::asset('resources/img/logo_1_def.png') }}">
    </div>
    <div class="container register-container mt-2 mb-4">

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-register">{{ __('Registra il tuo ristorante') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            {{-- nome utente --}}
                            <div class="mb-4 row">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nome utente') }}<span
                                        class="input-required fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" autocomplete="name" autofocus>

                                    <small id="error-name" class="text-danger fw-semibold"></small>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- nome utente --}}

                            {{-- nome ristorante --}}
                            <div class="mb-4 row">
                                <label for="business_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Nome ristorante') }}<span
                                        class="input-required fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="business_name" type="text"
                                        class="form-control @error('business_name') is-invalid @enderror"
                                        name="business_name" value="{{ old('business_name') }}" autocomplete="business_name"
                                        autofocus>

                                    <small id="error-business_name" class="text-danger fw-semibold"></small>

                                    @error('business_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- nome ristorante --}}

                            {{-- tipologie --}}
                            <div class="row row-cols-2 mb-3 row-types">
                                <div class="col-md-4">Tipologie<span class="input-required fw-bold">*</span></div>
                                <div class="btn-group col-6 flex-wrap" role="group">
                                    @foreach ($types as $type)
                                        <input value="{{ $type->id }}" type="checkbox" class="btn-check"
                                            id="type{{ $type->id }}" name="types[]"
                                            @if ($errors->any() && in_array($type->id, old('types', []))) checked @endif>
                                        <label class="btn m-1 rounded-2 w-25"
                                            for="type{{ $type->id }}">{{ $type->name }}</label>
                                    @endforeach

                                    <div class="col-12">
                                        <small id="error-types" class="text-danger fw-semibold"></small>
                                    </div>
                                    @error('types')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- tipologie --}}

                            {{-- immagine --}}
                            <div class="mb-4 row">
                                <label for="image" class="form-label col-md-4">Immagine</label>
                                <div class="col-md-6">
                                    <input class="form-control" type="file" id="image" name="image">
                                    <small id="error-image" class="text-danger fw-semibold"></small>
                                </div>

                            </div>
                            {{-- immagine --}}

                            {{-- indirizzo --}}
                            <div class="mb-4 row">
                                <label for="address"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}<span
                                        class="input-required fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                        class="form-control @error('address') is-invalid @enderror" name="address"
                                        value="{{ old('address') }}" autocomplete="address" autofocus>


                                    <small id="error-address" class="text-danger fw-semibold"></small>

                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- indirizzo --}}

                            {{-- telefono --}}
                            <div class="mb-4 row">
                                <label for="phone_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}<span
                                        class="input-required fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text"
                                        class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                        value="{{ old('phone_number') }}" autocomplete="phone_number" autofocus>

                                    <small id="error-phone_number" class="text-danger fw-semibold"></small>

                                    @error('phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- telefono --}}

                            {{-- vat --}}
                            <div class="mb-4 row">
                                <label for="vat_number"
                                    class="col-md-4 col-form-label text-md-right">{{ __('P.IVA') }}<span
                                        class="input-required fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="vat_number" type="text"
                                        class="form-control @error('vat_number') is-invalid @enderror" name="vat_number"
                                        value="{{ old('vat_number') }}" autocomplete="vat_number">

                                    <small id="error-vat_number" class="text-danger fw-semibold"></small>

                                    @error('vat_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- vat --}}

                            {{-- email --}}
                            <div class="mb-4 row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}<span
                                        class="input-required fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" autocomplete="email">

                                    <small id="error-email" class="text-danger fw-semibold"></small>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- email --}}

                            {{-- password --}}
                            <div class="mb-4 row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Password') }}<span
                                        class="input-required fw-bold">*</span></label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        autocomplete="password">
                                    {{-- TODO: REQUISITI VERDE/ROSSO --}}
                                    <small id="error-password" class="text-danger fw-semibold"></small>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- password --}}


                            {{-- confirm password --}}
                            <div class="mb-4 row">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Conferma Password') }}<span
                                        class="input-required fw-bold">*</span></label>


                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" autocomplete="new-password">

                                    <small id="error-password_confirm" class="text-danger fw-semibold"></small>
                                </div>
                            </div>
                            {{-- confirm password --}}

                            {{-- btn register --}}
                            <div class="mb-4 row mb-0">
                                <div class="col-md-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-custom-primary w-auto btn-register">
                                        {{ __('Registrati') }}
                                    </button>
                                </div>
                            </div>
                            {{-- btn register --}}
                        </form>
                        <div>
                            <p><span class="input-required">*</span> campi obbligatori</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // una volta che il documento HTML è stato completamente caricato e analizzato dal browser raccolgo i dati
        document.addEventListener('DOMContentLoaded', (event) => {
            const btnRegister = document.querySelector('.btn-register');

            // Nome utente
            const name = document.getElementById('name');
            const errorName = document.getElementById('error-name');

            // Nome ristorante
            const businessName = document.getElementById('business_name');
            const errorBusinessName = document.getElementById('error-business_name');

            // Tipologie
            const checkboxes = document.querySelectorAll('input[type=checkbox]');
            const checkboxLength = checkboxes.length;
            const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;
            const errorTypes = document.getElementById('error-types');

            // Immagine
            const image = document.getElementById('image');
            let file = null;
            const errorImage = document.getElementById('error-image');

            // Indirizzo
            const address = document.getElementById('address');
            const errorAddress = document.getElementById('error-address');

            // Telefono
            const phoneNumber = document.getElementById('phone_number');
            const errorPhoneNumber = document.getElementById('error-phone_number');

            // PIVA
            const vatNumber = document.getElementById('vat_number');
            const errorVatNumber = document.getElementById('error-vat_number');

            // Email
            const email = document.getElementById('email');
            const errorEmail = document.getElementById('error-email');

            // Password
            const password = document.getElementById('password');
            const errorPassword = document.getElementById('error-password');

            // Conferma Password
            const passwordConfirm = document.getElementById('password-confirm');
            const errorPasswordConfirm = document.getElementById('error-password_confirm');

            btnRegister.addEventListener('click', function(event) {
                // Reset degli errori
                resetErrors();
                event.preventDefault();
                let isValid = true;


                // Validazione nome utente
                if (name.value.trim().length === 0) {
                    errorName.innerHTML = 'Il campo Nome Utente è obbligatorio';
                    name.classList.add('is-invalid');
                    isValid = false;
                } else if (name.value.trim().length < 4) {
                    errorName.innerHTML = 'Il campo Nome Utente deve avere almeno 4 caratteri';
                    name.classList.add('is-invalid');
                    isValid = false;
                } else if (name.value.trim().length > 50) {
                    errorName.innerHTML = 'Il campo Nome Utente non deve avere più di 50 caratteri';
                    name.classList.add('is-invalid');
                    isValid = false;
                }

                // Validazione nome ristorante
                if (businessName.value.trim().length === 0) {
                    errorBusinessName.innerHTML = 'Il campo Nome Ristorante è obbligatorio';
                    businessName.classList.add('is-invalid');
                    isValid = false;
                } else if (businessName.value.trim().length < 4) {
                    errorBusinessName.innerHTML = 'Il campo Nome Ristorante deve avere almeno 4 caratteri';
                    businessName.classList.add('is-invalid');
                    isValid = false;
                } else if (businessName.value.trim().length > 50) {
                    errorBusinessName.innerHTML =
                        'Il campo Nome Ristorante non deve avere più di 50 caratteri';
                    businessName.classList.add('is-invalid');
                    isValid = false;
                }

                // Validazione tipologie
                if (!isChecked()) {
                    errorTypes.innerHTML = 'Occorre selezionare almeno una Tipologia';
                    isValid = false;
                }

                // Validazione immagine
                file = image.files[0];
                const maxSize = 20480 * 1024;
                const allowedTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/webp'];

                if (file) {
                    if (!allowedTypes.includes(file.type)) {
                        errorImage.innerHTML = 'I formati consentiti sono: png, jpg, jpeg, webp';
                        image.classList.add('is-invalid');
                        isValid = false;
                    } else if (file.size > maxSize) {
                        errorImage.innerHTML = 'La dimensione massima del file è 20 mb';
                        image.classList.add('is-invalid');
                        isValid = false;
                    }
                }

                // Validazione indirizzo
                if (address.value.trim().length === 0) {
                    errorAddress.innerHTML = 'Il campo Indirizzo è obbligatorio';
                    address.classList.add('is-invalid');
                    isValid = false;
                } else if (address.value.trim().length < 8) {
                    errorAddress.innerHTML = 'Il campo Indirizzo deve avere almeno 8 caratteri';
                    address.classList.add('is-invalid');
                    isValid = false;
                } else if (address.value.trim().length > 100) {
                    errorAddress.innerHTML = 'Il campo Indirizzo non deve avere più di 100 caratteri';
                    address.classList.add('is-invalid');
                    isValid = false;
                }

                // Validazione telefono
                if (phoneNumber.value.trim().length === 0) {
                    errorPhoneNumber.innerHTML = 'Il campo Telefono è obbligatorio';
                    phoneNumber.classList.add('is-invalid');
                    isValid = false;
                } else if (!/^\d+$/.test(phoneNumber.value)) {
                    errorPhoneNumber.innerHTML = 'Il campo Telefono può contenere solo numeri';
                    phoneNumber.classList.add('is-invalid');
                    isValid = false;
                } else if (phoneNumber.value.trim().length < 10) {
                    errorPhoneNumber.innerHTML = 'Il campo Telefono non deve avere meno di 10 numeri';
                    phoneNumber.classList.add('is-invalid');
                    isValid = false;
                } else if (phoneNumber.value.trim().length > 10) {
                    errorPhoneNumber.innerHTML = 'Il campo Telefono non deve avere più di 10 numeri';
                    phoneNumber.classList.add('is-invalid');
                    isValid = false;
                }

                // Validazione PIVA
                if (vatNumber.value.trim().length === 0) {
                    errorVatNumber.innerHTML = 'Il campo P.IVA è obbligatorio';
                    vatNumber.classList.add('is-invalid');
                    isValid = false;
                } else if (vatNumber.value.trim().length < 11) {
                    errorVatNumber.innerHTML = 'Il campo P.IVA non deve avere meno di 11 numeri';
                    vatNumber.classList.add('is-invalid');
                    isValid = false;
                } else if (vatNumber.value.trim().length > 11) {
                    errorVatNumber.innerHTML = 'Il campo P.IVA non deve avere più di 11 numeri';
                    vatNumber.classList.add('is-invalid');
                    isValid = false;
                }

                // Validazione email
                let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (email.value.trim().length === 0) {
                    errorEmail.innerHTML = 'Il campo Email è obbligatorio';
                    email.classList.add('is-invalid');
                    isValid = false;
                } else if (!emailPattern.test(email.value)) {
                    errorEmail.innerHTML = 'Inserisci un indirizzo email valido';
                    email.classList.add('is-invalid');
                    isValid = false;
                } else if (email.value.trim().length > 50) {
                    errorEmail.innerHTML = 'Il campo Email non deve essere più lungo di 50 caratteri';
                    email.classList.add('is-invalid');
                    isValid = false;
                }

                // Validazione password
                let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

                if (password.value.trim().length === 0) {
                    errorPassword.innerHTML = 'Il campo Password è obbligatorio';
                    password.classList.add('is-invalid');
                    isValid = false;
                } else if (!passwordPattern.test(password.value)) {
                    errorPassword.innerHTML =
                        'La password deve contenere almeno 8 caratteri, un numero e un carattere speciale';
                    password.classList.add('is-invalid');
                    isValid = false;
                } else if (password.value !== passwordConfirm.value) {
                    errorPassword.innerHTML = 'Le password non coincidono';
                    password.classList.add('is-invalid');
                    passwordConfirm.classList.add('is-invalid');
                    isValid = false;
                }

                // Validazione conferma password
                if (passwordConfirm.value.trim().length === 0) {
                    errorPasswordConfirm.innerHTML = 'Il campo Conferma Password è obbligatorio';
                    passwordConfirm.classList.add('is-invalid');
                    isValid = false;
                }

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

            function isChecked() {
                for (let i = 0; i < checkboxLength; i++) {
                    if (checkboxes[i].checked) return true;
                }
                return false;
            }
        });
    </script>
@endsection
