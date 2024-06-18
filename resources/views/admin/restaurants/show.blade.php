@extends('layouts.admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $restaurant->business_name }}</h5>
                <p class="card-text">{{ $restaurant->address }}</p>
                <p class="card-text">{{ $restaurant->email }}</p>
                <p class="card-text">{{ $restaurant->phone_number }}</p>
            </div>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Piatto</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Disponibilità</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dishes as $dish)
                    <tr>
                        <th scope="row">{{ $dish->name }}</th>
                        <td>{{ $dish->price }}</td>
                        <td>{{ $dish->description }}</td>
                        <td>{{ $dish->available }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.dishes.show', $dish) }}">
                                    <button class="btn btn-custom-primary">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </a>
                                <a class="mx-2" href="{{ route('admin.dishes.edit', $dish) }}">
                                    <button class="btn btn-custom-secondary">
                                        <i class="fa-solid fa-pencil"></i>
                                    </button>
                                </a>
                                <form action="{{ route('admin.dishes.destroy', $dish) }}" method="POST">
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

        <a href="{{ route('admin.dishes.create', ['restaurant' => $restaurant->id]) }}" class="btn btn-primary">Aggiungi
            piatto</a>
    </div>
@endsection
