@php
    use App\Functions\Helper;
@endphp

@extends('layouts.admin')

@section('content')
    <style>
        td>i {
            color: #2ec4b6;
        }
    </style>

    <div class="container d-flex flex-column align-items-center">

        <h2 class="mb-4">Lista ordini</h2>

        <table class="table table-hover table-custom">
            <thead>
                <tr>
                    <th scope="col">Cliente</th>
                    <th scope="col" class="d-none d-lg-table-cell">Recapiti</th>
                    <th scope="col" class="d-none d-lg-table-cell">Indirizzo</th>
                    <th scope="col">Data</th>
                    <th scope="col">Prezzo Totale (€)</th>
                    {{-- <th scope="col">Piatti</th> --}}
                    <th scope="col">Riepilogo</th>
                    {{-- <th scope="col">Dettaglio</th> --}}
                </tr>
            </thead>

            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td scope="row">{{ $order->name }} {{ $order->surname }}</td>
                        <td class="d-none d-lg-table-cell"><i class="fa-solid fa-envelope"></i> {{ $order->email }}<br><i
                                class="fa-solid fa-phone"></i>
                            {{ $order->phone_number }}</td>
                        <td class="d-none d-lg-table-cell"><i class="fa-solid fa-location-dot"></i> {{ $order->address }}
                        </td>
                        <td class="text-center"><i class="fa-regular fa-calendar"></i>
                            {{ Helper::formatDate($order->date) }}</td>
                        <td class="text-center">{{ str_replace('.', ',', $order->total_price) }}</td>
                        {{-- <td>
                            <ul class="text-center list-unstyled">
                                @foreach ($order->dishes as $dish)
                                    <li> {{ $dish->name }} x {{ $dish->pivot->quantity }}</li>
                                @endforeach
                            </ul>
                        </td> --}}
                        <td class="text-center">
                            <a href="{{ route('admin.orders.show', $order) }}">
                                <button class="btn btn-custom-primary">
                                    <i class="fa-solid fa-info"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
                @empty
                    <div class="alert alert-danger" role="alert">
                        Nessun ordine in archivio
                    </div>
                @endforelse
            </tbody>
        </table>
        <div class="container pagination-container">
            {{ $orders->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection
