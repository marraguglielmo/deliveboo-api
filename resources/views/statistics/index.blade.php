<!DOCTYPE html>
<html>

<head>
    <title>Order Statistics ciao</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div>
        <canvas id="orderChart"></canvas>
    </div>

    <script>
        var ctx = document.getElementById('orderChart').getContext('2d');
        var statistics = @json($statistics);

        var labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October',
            'November', 'December'
        ];
        var datasets = [];

        statistics.forEach(function(stat) {
            datasets.push({
                label: stat.restaurant,
                data: stat.orders,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            });
        });

        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: datasets
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
</body>

</html>
