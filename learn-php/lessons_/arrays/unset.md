# unset

Xoá phần tử khỏi mảng bằng `unset()`.

```php
<?php
$arr = ['a','b','c'];
unset($arr[1]); // xoá phần tử có chỉ số 1
print_r($arr); // chỉ số 0 và 2 còn tồn tại
?>
```

**Lưu ý:** unset không reindex; dùng array_values() nếu muốn tái lập index.
