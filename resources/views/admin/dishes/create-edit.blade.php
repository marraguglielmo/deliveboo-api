@extends('layouts.admin')
@section('content')
    <div class="container">
        <h2 class="text-center">{{ $title }} {{ $dish?->name }}</h2>

        <form action="{{ $route }}" method="POST" enctype="multipart/form-data" class="mx-5">
            @csrf
            @method($method)
            {{-- nome --}}
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Nome piatto') }} <span
                        class="input-required fw-bold">*</span></label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name', $dish?->name) }}" autocomplete="name" autofocus>

                <small id="error-name" class="text-danger fw-semibold"></small>

                @error('name')
                    <small id="name" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            {{-- nome --}}

            {{-- prezzo --}}
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo (€)<span class="input-required fw-bold">*</span></label>
                <input type="text" min="0" step=".5"
                    class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                    value="{{ old('price', $dish?->price) }}">

                <small id="error-price" class="text-danger fw-semibold"></small>

                @error('price')
                    <small id="price" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            {{-- prezzo --}}

            {{-- ingredienti --}}
            <div class="mb-3">
                <label for="description" class="form-label">Ingredienti (<span class="fst-italic">separati da
                        "-"</span>) <span class="input-required fw-bold">*</span></label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" value="{{ old('description', $dish?->description) }}">

                <small id="error-description" class="text-danger fw-semibold"></small>

                @error('description')
                    <small id="description" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            {{-- ingredienti --}}

            {{-- foto piatto --}}
            <div class="mb-3">
                <label for="image" class="form-label">Foto piatto</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="image" value="{{ old('image', $dish?->description) }}">

                <small id="error-image" class="text-danger fw-semibold"></small>

                @error('image')
                    <small id="image" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>
            {{-- foto piatto --}}

            {{-- disponibile --}}
            <div class="mb-3">
                <div class="form-check form-switch">
                    <input name="available" class="form-check-input" type="checkbox" role="switch" id="available"
                        value="{{ old('available') }}" @if ($dish?->available) checked @endif>
                    <label class="form-check-label" for="available">Disponibile</label>
                </div>
            </div>
            {{-- disponibile --}}

            <button type="submit" class="btn btn-custom-primary" id="btn-add">{{ $submit }}</button>
        </form>
    </div>


    <script>
        // btn create
        const btnCreate = document.getElementById('btn-add');
        // nome
        const name = document.getElementById('name');
        const errorName = document.getElementById('error-name');
        // prezzo
        const price = document.getElementById('price');
        const errorPrice = document.getElementById('error-price');
        // ingredienti
        const description = document.getElementById('description');
        const errorDescription = document.getElementById('error-description');
        // foto piatto
        const image = document.getElementById('image');
        const errorImage = document.getElementById('error-image');



        btnCreate.addEventListener('click', function(event) {
            event.preventDefault();
            console.log(errorName);
            errorName.innerHTML = '';
            name.classList.remove('is-invalid');
            errorPrice.innerHTML = '';
            price.classList.remove('is-invalid');
            errorDescription.innerHTML = '';
            description.classList.remove('is-invalid');
            file = image.files[0];
            errorImage.innerHTML = '';
            image.classList.remove('is-invalid');

            // controlli nome
            if (name.value.trim().length === 0) {
                errorName.innerHTML = 'Il campo Nome piatto è obbligatorio';
                name.classList.add('is-invalid');
            } else if (name.value.trim().length < 4) {
                errorName.innerHTML = 'Il campo Nome piatto deve avere almeno 4 caratteri';
                name.classList.add('is-invalid');
            } else if (name.value.trim().length > 50) {
                errorName.innerHTML = 'Il campo Nome piatto non deve avere più di 50 caratteri';
                name.classList.add('is-invalid');
            }

            // controlli prezzo
            let priceValue = parseFloat(price.value.replace(',', '.'));
            let pricePattern = /^-?\d+([,.]\d{1,2})?$/;

            if (price.value.trim().length === 0) {
                errorPrice.innerHTML = 'Il campo Prezzo è obbligatorio'
                price.classList.add('is-invalid');
            } else if (priceValue < 0) {
                errorPrice.innerHTML = 'Inserisci un prezzo valido (es. 10.50)';
                price.classList.add('is-invalid');
            } else if (!pricePattern.test(price.value)) {
                errorPrice.innerHTML = 'Il campo Prezzo contiene solo numeri';
                price.classList.add('is-invalid');
            } else {
                // Assegna il valore formattato (con punto) al campo
                price.value = priceValue.toFixed(2); // Imposta due decimali
            }

            // description
            if (description.value.trim().length === 0) {
                errorDescription.innerHTML = 'Il campo Descrizione è obbligatorio'
                description.classList.add('is-invalid');
            } else if (description.value.trim().length < 4) {
                errorDescription.innerHTML = 'Il campo Descrizione deve avere almeno 4 caratteri'
                description.classList.add('is-invalid');
            } else if (description.value.trim().length > 255) {
                errorDescription.innerHTML = 'Il campo Descrizione non deve avere più di 255 caratteri'
                description.classList.add('is-invalid');
            }

            // foto piatto
            const maxSize = 20480;
            const allowedTypes = ['image/png', 'image/jpg', 'image/jpeg', 'image/webp'];

            if (file) {
                if (!allowedTypes.includes(file.type)) {
                    errorImage.innerHTML = 'I formati consentiti sono: png, jpg, jpeg, webp'
                    image.classList.add('is-invalid');
                } else if (file.size > maxSize) {
                    errorImage.innerHTML = 'La dimensione massima del file è 20 mb';
                    image.classList.add('is-invalid');
                } else {
                    errorImage.innerHTML = ''
                }
            }

            file = null;


        })
    </script>
@endsection
