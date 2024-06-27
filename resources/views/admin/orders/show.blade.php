@extends('layouts.admin')

@section('content')
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
                        <h5 class="card-title">Nome: {{ $order->name }}</h5>
                        <h5 class="card-title">Cognome: {{ $order->surname }}</h5>
                        <p class="card-text"><span class="fst-italic">Data: </span>{{ $order->date }}</p>
                        <p class="card-text"><span class="fst-italic">Prezzo Totale:
                            </span>{{ str_replace('.', ',', $order->total_price) }} &euro;</p>
                        <p class="card-text"><span class="fst-italic">Piatti:
                                <ul>
                                    @foreach ($order->dishes as $dish)
                                        <li> {{ $dish->name }} x {{ $dish->pivot->quantity }}</li>
                                    @endforeach
                                </ul>
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.orders.index') }}" class="btn btn-custom-primary align-self-center" id="btn-width">Torna al
            menu</a>
    </div>
@endsection
