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

        // Dữ liệu giá cổ phiếu demo với định dạng OHLC
        const data = [
            { x: '2023-10-02', o: 100, h: 110, l: 95, c: 108 },
            { x: '2023-10-03', o: 108, h: 112, l: 104, c: 110 },
            { x: '2023-10-04', o: 110, h: 115, l: 107, c: 112 },
            { x: '2023-10-05', o: 112, h: 118, l: 110, c: 116 },
            { x: '2023-10-06', o: 116, h: 120, l: 114, c: 118 },
            { x: '2023-10-09', o: 118, h: 122, l: 116, c: 120 },
            { x: '2023-10-10', o: 120, h: 125, l: 119, c: 123 },
            { x: '2023-10-11', o: 123, h: 130, l: 121, c: 128 },
            { x: '2023-10-12', o: 128, h: 132, l: 126, c: 130 },
            { x: '2023-10-13', o: 130, h: 135, l: 128, c: 133 }
        ];

        new Chart(ctx, {
            type: 'candlestick',
            data: {
                datasets: [{
                    label: 'Giá (USD)',
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
    </script>
</body>
</html>
