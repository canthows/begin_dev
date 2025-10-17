# Hàm (Function) trong PHP

## 1. Khái niệm hàm
Hàm (function) là một khối mã có thể tái sử dụng, giúp bạn không phải viết lại cùng một đoạn code nhiều lần.

Hàm có thể:
- Nhận đầu vào (gọi là **tham số** – parameters)
- Trả về kết quả (gọi là **giá trị trả về** – return value)

Ví dụ đơn giản:
```php
<?php
function sayHello() {
    echo "Xin chào!";
}

sayHello(); // Gọi hàm
?>
```

Kết quả:
```
Xin chào!
```

---

## 2. Hàm có tham số
Hàm có thể nhận các giá trị đầu vào (tham số).

```php
<?php
function greet($name) {
    echo "Xin chào, " . $name . "!";
}

greet("CaRo");
?>
```

Kết quả:
```
Xin chào, CaRo!
```

---

## 3. Hàm có giá trị trả về (return)
Bạn có thể trả về một giá trị từ hàm bằng từ khóa `return`.

```php
<?php
function sum($a, $b) {
    return $a + $b;
}

$result = sum(3, 5);
echo $result;
?>
```

Kết quả:
```
8
```

---

## 4. Tham số mặc định
Bạn có thể gán giá trị mặc định cho tham số. Nếu khi gọi hàm không truyền giá trị, PHP sẽ dùng giá trị mặc định.

```php
<?php
function welcome($name = "Khách") {
    echo "Xin chào, " . $name . "!";
}

welcome();
welcome("CaRo");
?>
```

Kết quả:
```
Xin chào, Khách!
Xin chào, CaRo!
```

---

## 5. Biến cục bộ và biến toàn cục
- **Biến cục bộ**: chỉ tồn tại trong phạm vi của hàm.
- **Biến toàn cục**: có thể truy cập ở mọi nơi.

```php
<?php
$site = "YourDomainName.com";

function showSite() {
    global $site; // dùng biến toàn cục
    echo "Website: " . $site;
}

showSite();
?>
```

Kết quả:
```
Website: YourDomainName.com
```

---
