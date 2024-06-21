@php
    use App\Functions\Helper;
@endphp

@extends('layouts.admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">

        <h2>Lista ordini</h2>

        <table class="table table-hover table-custom">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Prezzo Totale</th>
                    <th scope="col">Piatti</th>
                    {{-- <th scope="col">Dettaglio</th> --}}
                </tr>
            </thead>

            <tbody>
                @forelse ($orders as $order)
                    <tr>
                        <td scope="row">{{ Helper::formatDate($order->updated_at) }}</td>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->surname }}</td>
                        <td>{{ $order->total_price }}</td>

                        <td>
                            <ul>
                                @foreach ($order->dishes as $dish)
                                    <li> {{ $dish->name }} x {{ $dish->pivot->quantity }}</li>
                                @endforeach
                            </ul>
                        </td>

                        {{-- <td>
                            <div class="d-flex">
                                <a href="#">
                                    <button class="btn btn-custom-primary">
                                        <i class="fa-solid fa-info"></i>
                                    </button>
                                </a>
                            </div>
                        </td> --}}
                    </tr>
                @empty
                    <div class="alert alert-danger" role="alert">
                        Nessun ordine in archivio
                    </div>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection
