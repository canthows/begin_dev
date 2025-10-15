# Foreach loop

Dùng để duyệt mảng dễ dàng.

```php
<?php
$colors = ['red','green','blue'];
foreach ($colors as $key => $value) {
    echo "$key => $value\n";
}

// Nếu không cần key:
foreach ($colors as $color) {
    echo $color . '\n';
}
?>
```
