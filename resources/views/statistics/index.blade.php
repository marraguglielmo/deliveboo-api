@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Grafici</h2>
        <div>
            <canvas id="orderChart"></canvas>
        </div>
    </div>

    <script>
        let ctx = document.getElementById('orderChart');

        let datasets = [];
        const statistics = @json($statistics);

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Giugno 2023', 'Luglio 2023', 'Agosto 2023', 'Settembre 2023', 'Ottobre 2023',
                    'Novembre 2023', 'Dicembre 2023', 'Gennaio 2024',
                    'Febbraio 2024', 'Marzo 2024', 'Aprile 2024', 'Maggio 2024', 'Giugno 2024'
                ],
                datasets: [{
                    label: 'numero di ordini',
                    data: statistics.orders,
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
