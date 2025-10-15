# Hằng số (constant) - define

Hằng số dùng `define` hoặc `const` (trong PHP 5.3+). Hằng số không thay đổi sau khi định nghĩa.

```php
<?php
define('SITE_NAME', 'Học PHP');
echo SITE_NAME; // Học PHP

// Hoặc dùng const (trong lớp hay ngoài global)
const YEAR = 2025;
echo YEAR;
?>
```

**Lưu ý:** Hằng số không có dấu $ và thường viết hoa theo chuẩn.
