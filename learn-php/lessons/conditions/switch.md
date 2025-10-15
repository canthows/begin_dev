# Switch case

Sử dụng `switch` khi so sánh nhiều giá trị.

```php
<?php
$role = 'editor';

switch ($role) {
    case 'admin':
        echo 'Quyền admin';
        break;
    case 'editor':
        echo 'Quyền biên tập';
        break;
    default:
        echo 'Khách';
        break;
}
?>
```
