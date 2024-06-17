@extends('layouts.admin')
@section('content')
    <h1>Ristoranti</h1>

    <div class="container">

        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Indirizzo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($restaurants as $restaurant)
                    <tr>
                        <td>{{ $restaurant->business_name }}</td>
                        <td>{{ $restaurant->address }}</td>
                        <td>{{ $restaurant->phone_number }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.restaurants.show', $restaurant) }}">
                                    <button class="btn btn-custom-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </a>
                                <a class="mx-2" href="{{ route('admin.restaurants.edit', $restaurant) }}">
                                    <button class="btn btn-custom-secondary">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                </a>
                                <form action="{{ route('admin.restaurants.destroy', ['restaurant' => $restaurant->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-custom-tertiary"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
