<!DOCTYPE html>
<html>

<head>
    <title>Order Statistics</title>
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
        // Assuming statistics is an array of objects with properties 'restaurant' and 'orders'
        statistics.forEach(function(stat, index) {
            datasets.push({
                label: 'Dataset ' + (index + 1),
                data: stat.orders,
                borderColor: index === 0 ? 'rgba(255, 99, 132, 1)' : 'rgba(54, 162, 235, 1)',
                backgroundColor: index === 0 ? 'rgba(255, 99, 132, 0.5)' : 'rgba(54, 162, 235, 0.5)',
                type: index === 0 ? 'bar' : 'line',
                stack: 'combined'
            });
        });

        var myChart = new Chart(ctx, {
            data: {
                labels: labels.slice(0, statistics[0].orders.length),
                datasets: datasets
            },
            options: {
                plugins: {
                    title: {
                        display: true,
                        text: 'Chart.js Stacked Line/Bar Chart'
                    }
                },
                scales: {
                    y: {
                        stacked: true,
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>
