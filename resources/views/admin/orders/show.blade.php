@php
    use App\Functions\Helper;
@endphp

@extends('layouts.admin')

@section('content')
    <style>
        i{
            color: #2ec4b6;
        }
    </style>

    <h2 class="text-center">Riepilogo Ordine</h2>
    <div class="container d-flex flex-column">
        <div class="card card-dish my-4">
            <div class="row g-0 h-100">
                <div class="col-md-4 h-100">
                    <div class="card-img-box">
                        @if ($restaurant->image)
                            <img src="{{ $restaurant->image }}" alt="{{ $restaurant->business_name }}">
                        @else
                            <img src="{{ Vite::asset('resources/img/placeholder.jpg') }}">
                        @endif
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Cliente: {{ $order->name }} {{ $order->surname }}</h5><hr>
                        <div class="row">
                            <div class="col-6">
                                <h5 class="card-title"><i class="fa-solid fa-envelope" style="color: #2ec4b6;"></i> {{ $order->email }}</h5>
                                <h5 class="card-title"><i class="fa-solid fa-phone"></i> {{ $order->phone_number }}</h5>
                            </div>
                            <div class="col-6">
                                <h5 class="card-title"><i class="fa-solid fa-location-dot"></i> {{ $order->address }}</h5>
                                <h5 class="card-title"><span class="fst-italic"><i class="fa-regular fa-calendar"></i> </span>{{ Helper::formatDate($order->date) }}</h5>
                            </div>
                        </div><hr>
                            <h5 class="card-title"><span class="fst-italic">Prezzo Totale: </span>{{ str_replace('.', ',', $order->total_price) }} &euro;</h5>
                        <p class="card-text"><span class="fst-italic">Piatti:
                            <ul>
                                @foreach ($order->dishes as $dish)
                                <li> {{ $dish->name }} x {{ $dish->pivot->quantity }}</li>
                                @endforeach
                            </ul>
                        </p>
                        <p class="card-text"><span class="fst-italic">Note:
                            </span>{{ $order->note }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.orders.index') }}" class="btn btn-custom-primary align-self-center" id="btn-width">Torna al
            menu</a>
    </div>
@endsection
