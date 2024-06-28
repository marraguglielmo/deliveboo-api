@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <div class="card">
                    <div class="card-img-top card-img-box">
                        @if ($restaurant->image)
                            @if (Str::startsWith($restaurant->image, ['http://', 'https://']))
                                <img src="{{ $restaurant->image }}" alt="{{ $restaurant->business_name }}">
                            @else
                                <img src="{{ asset('storage/' . $restaurant->image) }}" alt="{{ $restaurant->name }}">
                            @endif
                        @else
                            <img src="{{ Vite::asset('resources/img/placeholder.jpg') }}">
                        @endif
                    </div>


                    <div class="card-body">

                        <div class="badge-container">
                            @foreach ($restaurant->types as $type)
                                <span class="badge badge-custom-secondary">{{ $type->name }}</span>
                            @endforeach
                        </div>

                        <h3 class="card-title">{{ $restaurant->business_name }}</h3>
                        <p class="card-text"><span class="fst-italic">Indirizzo: </span>Milano, {{ $restaurant->address }}
                        </p>
                        <p class="card-text"><span class="fst-italic">Contatto email: </span>{{ $restaurant->email }}</p>
                        <p class="card-text"><span class="fst-italic">Contatto telefonico: </span>
                            + 39 {{ $restaurant->phone_number }}
                        </p>
                        <p class="card-text"><span class="fst-italic">P.IVA: </span>{{ $restaurant->vat_number }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
