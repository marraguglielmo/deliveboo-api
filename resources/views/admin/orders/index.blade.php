@extends('layouts.admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">

        <h1>I miei ordini</h1>

        {{-- @foreach ($dishes as $dish)
            @foreach ($dish->orders as $order)

                <p>{{ $order }}</p>

            @endforeach
        @endforeach --}}


        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Cognome</th>
                    <th scope="col">Prezzo Totale</th>
                    <th scope="col">Piatti</th>
                    <th scope="col">Dettaglio</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">{{ $order->updated_at }}</th>
                        <td>{{ $order->name }}</td>
                        <td>{{ $order->surname }}</td>
                        <td>{{ $order->total_price }}</td>


                        <td>
                            <ul>
                                @foreach ($order->dishes as $dish)
                                    <li> {{ $dish->name }}</li>
                                @endforeach
                            </ul>
                        </td>

                        <td>
                            <div class="d-flex">
                                <a href="#">
                                    <button class="btn btn-custom-primary">
                                        <i class="fa-solid fa-info"></i>
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
