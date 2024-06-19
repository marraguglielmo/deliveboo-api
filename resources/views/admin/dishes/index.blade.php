@extends('layouts.admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">

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
                    <th scope="col">Immagine</th>
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
                        <th scope="row">
                            <div class="img-box">

                                @if ($dish->image)
                                    @if (Str::startsWith($dish->image, ['http://', 'https://']))
                                        <img src="{{ $dish->image }}" alt="{{ $dish->name }}">
                                    @else
                                        <img src="{{ asset('storage/' . $dish->image) }}" alt="{{ $dish->name }}">
                                    @endif
                                @else
                                    <img src="{{ Vite::asset('resources/img/placeholder.jpg') }}">
                                @endif

                            </div>
                        </th>
                        <th scope="row">{{ $dish->name }}</th>
                        <td>{{ $dish->price }}</td>
                        <td>{{ $dish->description }}</td>
                        <td>{{ $dish->available }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.dishes.show', $dish) }}">
                                    <button class="btn btn-custom-primary">
                                        <i class="fa-solid fa-info"></i>
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

        <a href="{{ route('admin.dishes.create') }}" class="btn btn-primary">Aggiungi
            piatto</a>
    </div>
@endsection
