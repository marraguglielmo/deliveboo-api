@extends('layouts.admin')
@section('content')
    <h1>Ristoranti</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Indirizzo</th>
                <th>Telefono</th>
                <th>Partita IVA</th>
                <th>Modifica</th>
                <th>Elimina</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($restaurants as $restaurant)
                <tr>
                    <td>{{ $restaurant->business_name }}</td>
                    <td>{{ $restaurant->address }}</td>
                    <td>{{ $restaurant->phone }}</td>
                    <td>{{ $restaurant->piva }}</td>
                    <td>
                        <a href="{{ route('admin.restaurants.edit', ['restaurant' => $restaurant->id]) }}">Modifica</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.restaurants.destroy', ['restaurant' => $restaurant->id]) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    @endsection
