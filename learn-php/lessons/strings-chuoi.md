# 🧵 Chuỗi (Strings) trong PHP

## 1. Chuỗi là gì?

**Chuỗi (string)** là một dãy ký tự, được đặt trong **dấu nháy đơn (' ')** hoặc **dấu nháy kép (" ")**.

```php
<?php
$name = "CaRo";
$greeting = 'Xin chào';
?>
```

---

## 2. Khác nhau giữa nháy đơn và nháy kép

| Đặc điểm | Nháy đơn `' '` | Nháy kép `" "` |
|-----------|----------------|----------------|
| Hiển thị biến bên trong | ❌ Không | ✅ Có |
| Hỗ trợ ký tự đặc biệt (\n, \t, …) | ❌ Không | ✅ Có |

```php
<?php
$name = "CaRo";
echo 'Xin chào $name'; // In ra: Xin chào $name
echo "Xin chào $name"; // In ra: Xin chào CaRo
?>
```

---

## 3. Nối chuỗi

Dùng dấu `.` để **nối nhiều chuỗi** lại với nhau.

```php
<?php
$first = "Xin chào";
$name = "CaRo";
echo $first . " " . $name; // Kết quả: Xin chào CaRo
?>
```

> 🔹 Có thể dùng toán tử `.=` để nối thêm vào biến hiện có.

```php
<?php
$msg = "Hello";
$msg .= " World!";
echo $msg; // Kết quả: Hello World!
?>
```

---

## 4. Một số hàm xử lý chuỗi thông dụng

| Hàm | Chức năng | Ví dụ |
|------|------------|--------|
| `strlen($str)` | Đếm độ dài chuỗi | `strlen("Hello") // 5` |
| `strtoupper($str)` | Chuyển sang chữ hoa | `strtoupper("abc") // ABC` |
| `strtolower($str)` | Chuyển sang chữ thường | `strtolower("ABC") // abc` |
| `ucfirst($str)` | Viết hoa chữ cái đầu | `ucfirst("php") // Php` |
| `str_replace($tìm, $thay, $chuỗi)` | Thay thế ký tự/chuỗi | `str_replace("a", "o", "CaRa") // CoRo` |
| `substr($str, $start, $length)` | Cắt chuỗi con | `substr("Hello", 0, 3) // Hel` |
| `strpos($str, $find)` | Tìm vị trí xuất hiện đầu tiên | `strpos("Hello", "e") // 1` |

---

## 5. Ví dụ thực tế

```php
<?php
$name = "CaRo";
$message = "Xin chào " . strtoupper($name) . "!";
echo $message; // Kết quả: Xin chào CARO!
?>
```

---

## 💡 Ghi nhớ

- Dùng `" "` khi cần chèn biến vào chuỗi.  
- Dùng `' '` khi chỉ muốn hiển thị chuỗi đơn giản.  
- Dấu `.` là **toán tử nối chuỗi**.  
- Sử dụng các hàm có sẵn để xử lý chuỗi nhanh chóng.

---
