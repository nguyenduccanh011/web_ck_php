<?php
header('Content-Type: application/json');

$symbol = isset($_GET['symbol']) ? strtoupper($_GET['symbol']) : 'IBM';
$apiKey = 'demo';

$url = sprintf('https://www.alphavantage.co/query?function=TIME_SERIES_DAILY_ADJUSTED&symbol=%s&apikey=%s', urlencode($symbol), $apiKey);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$raw = curl_exec($ch);
if ($raw === false) {
    http_response_code(500);
    echo json_encode(['error' => 'Unable to fetch data']);
    exit;
}
curl_close($ch);

$json = json_decode($raw, true);
if (!isset($json['Time Series (Daily)'])) {
    http_response_code(500);
    echo json_encode(['error' => 'Invalid API response']);
    exit;
}

$data = [];
foreach (array_slice($json['Time Series (Daily)'], 0, 30) as $date => $values) {
    $data[] = [
        'x' => $date,
        'o' => (float) $values['1. open'],
        'h' => (float) $values['2. high'],
        'l' => (float) $values['3. low'],
        'c' => (float) $values['4. close'],
    ];
}

echo json_encode($data);

