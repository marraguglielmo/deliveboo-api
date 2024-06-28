@extends('layouts.app')

@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="thankyou-box">
            <i class="fa-solid fa-circle-check"></i>
            <h3>Il pagamento è avvenuto con successo!</h3>
            <p>Grazie per aver scelto DeliveBoo, torna a trovarci</p>
            <a href="{{ env('APP_FRONTEND_URL') }}?payment=success" class="btn btn-custom-secondary w-auto">Torna al sito</a>
        </div>
    </div>
@endsection
