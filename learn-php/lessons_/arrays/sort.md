# Sort array (sort, rsort)

Sắp xếp mảng tăng dần hoặc giảm dần.

```php
<?php
$nums = [3,1,4,2];
sort($nums); // sắp xếp tăng dần, chỉ số bị tái lập
print_r($nums);

rsort($nums); // sắp xếp giảm dần
print_r($nums);
?>
```

**Lưu ý:** Với mảng kết hợp muốn giữ key dùng `asort`/`arsort`.
