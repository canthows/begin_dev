# Hàm (Function)

Hàm giúp gom nhóm logic, trả về giá trị hoặc in ra màn hình.

```php
<?php
// Định nghĩa hàm
function sum($a, $b) {
    return $a + $b;
}

// Gọi hàm
echo sum(2, 3); // 5

// Hàm có tham số mặc định
function greet($name = 'Khách') {
    echo "Xin chào $name";
}
greet('Lan');
?>
```

**Lưu ý:** Nên viết hàm ngắn gọn, có trách nhiệm rõ ràng (single responsibility).
