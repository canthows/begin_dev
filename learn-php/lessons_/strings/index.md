# Chuỗi (Strings)

Chuỗi trong PHP là dữ liệu dạng văn bản. Có thể dùng nháy đơn `'...'` hoặc nháy kép `"..."`.

- [strlen](strlen.md)
- [strtoupper](strtoupper.md)
- [strtolower](strtolower.md)
- [ucfirst](ucfirst.md)
- [ucwords](ucwords.md)
- [str_replace](str_replace.md)
- [substr](substr.md)

## In ra chuỗi

```php
<?php
echo 'Chuỗi với nháy đơn\n';   // Không parse biến
echo "Chuỗi với nháy kép: $name\n"; // Parse biến nếu $name tồn tại
?>
```

## Nối chuỗi ( .= )

```php
<?php
$text = 'Hello';
$text .= ' World'; // tương đương $text = $text . ' World';
echo $text; // Hello World
?>
```

