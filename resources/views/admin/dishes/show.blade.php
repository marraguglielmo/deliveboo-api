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
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>

        <a href="#" class="btn btn-primary">Aggiungi piatto</a>
    </div>
@endsection
