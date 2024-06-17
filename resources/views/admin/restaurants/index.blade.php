@extends('layouts.admin')
@section('content')
    <h1>Ristoranti</h1>






    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Indirizzo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Partita IVA</th>
                <th scope="col">Azioni</th>
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
                        <a href="{{ route('admin.restaurants.edit', $restaurant) }}">Modifica</a>
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
    </table>
@endsection
