@extends('layouts.admin')
@section('content')
    <h1>

        {{ $title }}:
        {{ $restaurant?->business_name }}

    </h1>
    <div class="container">
        <form>
            <div class="mb-3">
                <label for="business_name" class="form-label">Nome Ristorante</label>
                <input type="text" class="form-control" id="business_name" name="business_name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Indirizzo Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Numero di Telefono</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number">
            </div>
            <div class="mb-3">
                <label class="form-label" for="address">Indirizzo</label>
                <input type="text" class="form-control" id="address" name="address">
            </div>
            <div class="mb-3">
                <div class="btn-group" role="group">
                    @foreach ($types as $type)
                        <input value="{{ $type->id }}" type="checkbox" class="btn-check" id="type{{ $type->id }}"
                            name="types[]" @if (
                                ($errors->any() && in_array($type->id, old('types', []))) ||
                                    (!$errors->any() && $restaurant?->type->contains($type))) checked @endif>
                        <label class="btn btn-outline-primary" for="type{{ $type->id }}">{{ $type->name }}</label>
                    @endforeach

                </div>
            </div>
            <button type="submit" class="btn btn-primary">{{ $submit }}</button>
        </form>
    </div>
@endsection
