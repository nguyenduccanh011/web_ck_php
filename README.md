# web_ck_php

## Giới thiệu
Dự án `web_ck_php` cung cấp một ví dụ tối giản về ứng dụng web viết bằng PHP hiển thị biểu đồ nến (candlestick) cho dữ liệu chứng khoán.

## Yêu cầu
- PHP >= 7.4

## Cài đặt & Chạy
1. Clone hoặc tải mã nguồn về máy.
2. Mở thư mục dự án và chạy máy chủ PHP tích hợp:
   ```bash
   php -S localhost:8000 -t public
   ```
3. Truy cập `http://localhost:8000` để xem ứng dụng.

## Lấy dữ liệu chứng khoán
Endpoint `public/fetch_stock.php` sử dụng API của Alpha Vantage (khóa `demo`) để tải dữ liệu giá cổ phiếu hằng ngày. Có thể truyền mã cổ phiếu bằng tham số `symbol`, ví dụ `fetch_stock.php?symbol=IBM`. Trang `index.php` sẽ gọi endpoint này để hiển thị biểu đồ.

## Thư viện
Ứng dụng sử dụng các thư viện:

- [Chart.js](https://www.chartjs.org/)
- [chartjs-chart-financial](https://github.com/chartjs/chartjs-chart-financial)
- [Luxon](https://moment.github.io/luxon/)

Biểu đồ hiển thị dữ liệu chứng khoán với nhiều điểm dữ liệu.

