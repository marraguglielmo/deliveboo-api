@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row my-4">
            <div class="col">
                <div class="card card-restaurant">
                    <div class="card-img-top card-img-box position-relative">

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-light position-absolute top-0 end-0 m-2"
                            data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-regular fa-image"></i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modifica Immagine</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="POST" action="{{ route('admin.user.update') }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="row">
                                                {{-- <label for="image" class="form-label col-md-4">Immagine</label> --}}
                                                <div class="col">
                                                    <input class="form-control" type="file" id="image"
                                                        name="image">
                                                    <input type="hidden" name="id" value="{{ $restaurant->id }}">
                                                    <small id="error-image" class="text-danger fw-semibold"></small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                                            <button type="submit" class="btn btn-custom-primary w-auto">Aggiorna</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        @if ($restaurant->image)
                            @if (Str::startsWith($restaurant->image, ['http://', 'https://']))
                                <img src="{{ $restaurant->image }}" alt="{{ $restaurant->business_name }}">
                            @else
                                <img src="{{ asset('storage/' . $restaurant->image) }}" alt="{{ $restaurant->name }}">
                            @endif
                        @else
                            <img src="{{ Vite::asset('resources/img/placeholder.jpg') }}">
                        @endif
                    </div>


                    <div class="card-body">
                        <div class="badge-container">
                            @foreach ($restaurant->types as $type)
                                <span class="badge badge-custom-secondary">{{ $type->name }}</span>
                            @endforeach
                        </div>

                        <h2 class="card-title">{{ $restaurant->business_name }}</h2>
                        <p class="card-text"><span class="fst-italic"><i class="fa-solid fa-map-location-dot"></i>Indirizzo:
                            </span>Milano, {{ $restaurant->address }}
                        </p>
                        <p class="card-text"><span class="fst-italic"><i class="fa-solid fa-envelope"></i>Contatto email:
                            </span>{{ $restaurant->email }}</p>
                        <p class="card-text"><span class="fst-italic"><i class="fa-solid fa-phone"></i>Contatto telefonico:
                            </span>
                            +39 {{ $restaurant->phone_number }}
                        </p>
                        <p class="card-text"><span class="fst-italic"><i class="fa-solid fa-id-card-clip"></i>P.IVA:
                            </span>{{ $restaurant->vat_number }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
