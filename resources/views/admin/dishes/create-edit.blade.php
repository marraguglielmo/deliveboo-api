@extends('layouts.admin')
@section('content')
    <h1>

        {{ $title }}

    </h1>
    <div class="container">

        <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method($method)
            <div class="mb-3">
                <label for="name" class="form-label">Nome Piatto</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $dish?->name) }}">

                @error('name')
                    <small id="name" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" min="0" step=".5"
                    class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                    value="{{ old('price', $dish?->price) }}">

                @error('price')
                    <small id="price" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                    name="description" value="{{ old('description', $dish?->description) }}">

                @error('description')
                    <small id="description" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Foto piatto</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                    name="image" value="{{ old('image', $dish?->description) }}">

                @error('image')
                    <small id="image" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <div class="form-check form-switch">
                    <input name="available" class="form-check-input" type="checkbox" role="switch" id="available"
                        value="{{ old('available') }}" @if ($dish?->available) checked @endif>
                    <label class="form-check-label" for="available">Disponibile</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">{{ $submit }}</button>
        </form>
    </div>
@endsection
