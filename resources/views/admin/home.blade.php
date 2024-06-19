@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Home Admin</h1>
        <div class="row">
            <div class="col">
                <div class="card m-auto w-50">
                    @if ($restaurant->image)
                        <img src="{{ $restaurant->image }}" class="card-img-top" alt="{{ $restaurant->business_name }}">
                    @else
                        <img src="{{ Vite::asset('resources/img/placeholder.jpg') }}">
                    @endif

                    <div class="card-body">

                        @foreach ($restaurant->types as $type)
                            <span class="badge text-bg-primary">{{ $type->name }}</span>
                        @endforeach

                        <h3 class="card-title">{{ $restaurant->business_name }}</h3>
                        <p class="card-text">{{ $restaurant->email }}</p>
                        <p class="card-text">{{ $restaurant->address }}</p>
                        <p class="card-text">{{ $restaurant->vat_number }}</p>
                        <p class="card-text">{{ $restaurant->phone_number }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
