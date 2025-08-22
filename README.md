# web_ck_php


## Giới thiệu
Dự án `web_ck_php` cung cấp một ví dụ tối giản về ứng dụng web viết bằng PHP hiển thị biểu đồ nến (candlestick) cho dữ liệu chứng khoán demo.

## Yêu cầu
- PHP >= 7.4

## Cài đặt & Chạy
1. Clone hoặc tải mã nguồn về máy.
2. Mở thư mục dự án và chạy máy chủ PHP tích hợp:
   ```bash
   php -S localhost:8000 -t public
   ```
3. Truy cập `http://localhost:8000` để xem ứng dụng.

## Thư viện
Ứng dụng sử dụng các thư viện:

- [Chart.js](https://www.chartjs.org/)
- [chartjs-chart-financial](https://github.com/chartjs/chartjs-chart-financial)
- [Luxon](https://moment.github.io/luxon/)

Biểu đồ hiển thị dữ liệu chứng khoán mẫu với nhiều điểm dữ liệu hơn.

## Chạy

Sử dụng máy chủ PHP tích hợp:

```bash
php -S localhost:8000 -t public
```

Sau đó truy cập vào [http://localhost:8000](http://localhost:8000) để xem biểu đồ.
