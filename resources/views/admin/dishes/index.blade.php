@extends('layouts.admin')

@section('content')
    <div class="container d-flex flex-column align-items-center">

        {{-- Gestione messaggi di errore/successo all'inserimento/modifica/eliminazione dei piatti --}}
        @if (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-light" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-hover table-custom my-4">
            <thead>
                <tr>
                    <th scope="col">Immagine</th>
                    <th scope="col">Piatto</th>
                    <th scope="col" class="text-nowrap">Prezzo (&euro;)</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Disponibilità</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($dishes as $dish)
                    <tr class="text-center">
                        <td class="d-flex justify-content-center">
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
                        </td>

                        <td>{{ $dish->name }}</td>
                        <td>{{ str_replace('.', ',', $dish->price) }}</td>
                        <td class="text-start">{{ $dish->description }}</td>

                        <td class="text-center">
                            @if ($dish->available)
                                <i class="fa-solid fa-check text-success fs-5"></i>
                            @else
                                <i class="fa-solid fa-xmark text-danger fs-5"></i>
                            @endif
                        </td>

                        <td>
                            <div class="d-flex justify-content-center">
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
                                    <button type="submit" class="btn btn-custom-tertiary">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ route('admin.dishes.create') }}" class="btn btn-custom-primary w-auto">Aggiungi piatto</a>
    </div>
@endsection
