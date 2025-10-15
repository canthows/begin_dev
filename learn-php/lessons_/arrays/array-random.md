# array_random (lấy phần tử ngẫu nhiên)

Sử dụng `array_rand()` để lấy key ngẫu nhiên rồi lấy giá trị.

```php
<?php
$arr = ['a','b','c','d'];
$key = array_rand($arr); // trả về 1 key
echo $arr[$key];

// Lấy 2 phần tử ngẫu nhiên
$keys = array_rand($arr, 2);
echo $arr[$keys[0]] . ', ' . $arr[$keys[1]];
?>
```
