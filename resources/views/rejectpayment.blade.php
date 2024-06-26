@extends('layouts.app')

@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="reject-box">
            <i class="fa-solid fa-circle-xmark"></i>
            <h3>Il pagamento è stato rifiutato</h3>
            <div>
                <a href="{{ env('APP_FRONTEND_URL') . '/checkout' }} " class="btn btn-custom-primary w-auto"> Torna al
                    checkout</a>
                <a href="{{ env('APP_FRONTEND_URL') }}" class="btn btn-custom-secondary w-auto">Torna al sito</a>
            </div>
        </div>
    </div>
@endsection
