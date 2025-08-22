<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biểu đồ chứng khoán demo</title>
    <script src="https://cdn.jsdelivr.net/npm/luxon@3/build/global/luxon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-luxon@1"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-financial@4"></script>
</head>
<body>
    <h1>Biểu đồ chứng khoán demo</h1>
    <canvas id="stockChart" width="600" height="400"></canvas>
    <script>
        const ctx = document.getElementById('stockChart').getContext('2d');

        fetch('fetch_stock.php?symbol=IBM')
            .then(response => response.json())
            .then(data => {
                new Chart(ctx, {
                    type: 'candlestick',
                    data: {
                        datasets: [{
                            label: 'Giá IBM (USD)',
                            data: data
                        }]
                    },
                    options: {
                        scales: {
                            x: {
                                type: 'time',
                                time: {
                                    unit: 'day'
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => {
                console.error('Error loading data', error);
            });
    </script>
</body>
</html>

