@extends('layouts.admin')

@section('content')
    <div class="container my-4">
        <div class="chart-box">
            <h3 class="text-center">Numero di ordini al mese</h3>
            <div>
                <canvas id="ordersNumChart" height="40vh" width="80vw"></canvas>
            </div>
        </div>

        <div class="chart-box">
            <h3 class="text-center">Ammontare vendite al mese</h3>
            <div>
                <canvas id="ordersAmountChart" height="40vh" width="80vw"></canvas>
            </div>
        </div>
    </div>

    <script>
        let ctxNum = document.getElementById('ordersNumChart');
        let ctxAmount = document.getElementById('ordersAmountChart');
        const statistics = @json($statistics);

        new Chart(ctxNum, {
            type: 'bar',
            data: {
                labels: ['Giugno 2023', 'Luglio 2023', 'Agosto 2023', 'Settembre 2023', 'Ottobre 2023',
                    'Novembre 2023', 'Dicembre 2023', 'Gennaio 2024',
                    'Febbraio 2024', 'Marzo 2024', 'Aprile 2024', 'Maggio 2024', 'Giugno 2024'
                ],
                datasets: [{
                    label: '# ordini',
                    data: statistics.orders_num,
                    borderWidth: 1,
                    backgroundColor: 'rgba(255, 159, 28, 0.8)',
                    hoverBackgroundColor: 'rgb(255, 72, 0)'
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

        new Chart(ctxAmount, {
            type: 'bar',
            data: {
                labels: ['Giugno 2023', 'Luglio 2023', 'Agosto 2023', 'Settembre 2023', 'Ottobre 2023',
                    'Novembre 2023', 'Dicembre 2023', 'Gennaio 2024',
                    'Febbraio 2024', 'Marzo 2024', 'Aprile 2024', 'Maggio 2024', 'Giugno 2024'
                ],
                datasets: [{
                    label: 'vendite €',
                    data: statistics.orders_amount,
                    borderWidth: 1,
                    backgroundColor: 'rgba(255, 159, 28, 0.8)',
                    hoverBackgroundColor: 'rgb(255, 72, 0)'
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
