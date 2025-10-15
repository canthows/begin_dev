# Phpinfo()

Hàm `phpinfo()` hiển thị toàn bộ cấu hình PHP hiện tại: extensions, phiên bản, biến môi trường, cấu hình upload, v.v.

```php
<?php
// Gọi hàm phpinfo để xem cấu hình PHP trên server
phpinfo();
?>
```

**Ghi chú:** chỉ nên chạy `phpinfo()` trên môi trường development. Trên production, thông tin này có thể lộ chi tiết bảo mật.
