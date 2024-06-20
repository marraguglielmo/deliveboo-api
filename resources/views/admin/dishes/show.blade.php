@extends('layouts.admin')

@section('content')
    <div class="container d-flex flex-column">
        <div class="card card-dish my-4">
            <div class="row g-0 h-100">
                <div class="col-md-4 h-100">
                    <div class="card-img-box">
                        @if ($dish->image)
                            @if (Str::startsWith($dish->image, ['http://', 'https://']))
                                <img src="{{ $dish->image }}" class="rounded-start" alt="{{ $dish->name }}">
                            @else
                                <img src="{{ asset('storage/' . $dish->image) }}" class="rounded-start"
                                    alt="{{ $dish->name }}">
                            @endif
                        @else
                            <img src="{{ Vite::asset('resources/img/placeholder.jpg') }}">
                        @endif
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $dish->name }}</h5>
                        <p class="card-text"><span class="fst-italic">Ingredienti: </span>{{ $dish->description }}</p>
                        <p class="card-text"><span class="fst-italic">Prezzo:
                            </span>{{ str_replace('.', ',', $dish->price) }} &euro;</p>
                        <p class="card-text"><span class="fst-italic">Disponibilità: </span>
                            @if ($dish->available)
                                <i class="fa-solid fa-check text-success fs-5"></i>
                            @else
                                <i class="fa-solid fa-xmark text-danger fs-5"></i>
                            @endif
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.dishes.index') }}" class="btn btn-custom-primary align-self-center" id="btn-width">Torna al
            menu</a>
    </div>
@endsection
