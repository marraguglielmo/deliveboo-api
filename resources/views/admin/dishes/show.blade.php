@extends('layouts.admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <div class="card" style="width: 18rem;">
            @if ($dish->image)
                @if (Str::startsWith($dish->image, ['http://', 'https://']))
                    <img src="{{ $dish->image }}" alt="{{ $dish->name }}">
                @else
                    <img src="{{ asset('storage/' . $dish->image) }}" alt="{{ $dish->name }}">
                @endif
            @else
                <img src="{{ Vite::asset('resources/img/placeholder.jpg') }}">
            @endif

            <div class="card-body">
                <h5 class="card-title">{{ $dish->name }}</h5>
                <p class="card-text">{{ $dish->price }}</p>
                <p class="card-text">{{ $dish->description }}</p>
                <p class="card-text">{{ $dish->available }}</p>
            </div>
        </div>

        <a href="{{ route('admin.dishes.index') }}" class="btn btn-custom-primary w-auto">Torna al menu</a>
    </div>
@endsection
