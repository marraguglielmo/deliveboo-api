@extends('layouts.admin')
@section('content')
    <h1>

        {{ $title }}:
        {{ $restaurant?->business_name }}

    </h1>
    <div class="container">

        <form action="{{ $route }}" method="POST">
            @csrf
            @method($method)
            <div class="mb-3">
                <label for="business_name" class="form-label">Nome Ristorante</label>
                <input type="text" class="form-control @error('business_name') is-invalid @enderror" id="business_name"
                    name="business_name" value="{{ old('business_name', $restaurant?->business_name) }}">

                @error('business_name')
                    <small id="business_name" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Indirizzo Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    name="email" value="{{ old('email', $restaurant?->email) }}">

                @error('email')
                    <small id="email" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Numero di Telefono</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                    name="phone_number" value="{{ old('phone_number', $restaurant?->phone_number) }}">

                @error('phone_number')
                    <small id="phone_number" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label" for="address">Indirizzo</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                    name="address" value="{{ old('address', $restaurant?->address) }}">

                @error('address')
                    <small id="address" class="invalid-feedback">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <div class="btn-group" role="group">
                    @foreach ($types as $type)
                        <input value="{{ $type->id }}" type="checkbox" class="btn-check" id="type{{ $type->id }}"
                            name="types[]" @if (
                                ($errors->any() && in_array($type->id, old('types', []))) ||
                                    (!$errors->any() && $restaurant?->types->contains($type))) checked @endif>
                        <label class="btn btn-outline-primary" for="type{{ $type->id }}">{{ $type->name }}</label>
                    @endforeach

                </div>
            </div>
            <button type="submit" class="btn btn-primary">{{ $submit }}</button>
        </form>
    </div>
@endsection
