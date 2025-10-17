# 🧱 Hằng số trong PHP

## 1. Hằng số là gì?

**Hằng số (constant)** là giá trị **không thay đổi** trong suốt quá trình chạy chương trình.  
Một khi đã được định nghĩa, bạn **không thể gán lại giá trị khác** cho nó.

---

## 2. Cách khai báo hằng số

### 👉 Dùng `define()`

```php
<?php
define("PI", 3.14);
echo PI; // Kết quả: 3.14
?>
```

> 🔹 `define(tên_hằng_số, giá_trị)`  
> 🔹 Tên hằng số **mặc định phân biệt chữ hoa – chữ thường**

---

### 👉 Dùng `const`

```php
<?php
const SITE_NAME = "TTSFree.com";
echo SITE_NAME; // Kết quả: TTSFree.com
?>
```

> ✅ `const` chỉ dùng được trong **phạm vi toàn cục hoặc bên trong class**  
> ❌ Không thể dùng `const` bên trong hàm (trước PHP 5.6)

---

## 3. So sánh `define()` và `const`

| Đặc điểm | `define()` | `const` |
|-----------|-------------|----------|
| Cách khai báo | Hàm | Từ khóa |
| Dùng trong hàm | ✅ Có thể | ❌ Không thể (trước PHP 5.6) |
| Dùng trong class | ❌ Không | ✅ Có thể |
| Thời điểm định nghĩa | Khi chạy chương trình | Khi biên dịch |

---

## 4. Hằng số có sẵn trong PHP

Một số hằng số được PHP định nghĩa sẵn:

```php
<?php
echo PHP_VERSION; // Phiên bản PHP hiện tại
echo PHP_OS;      // Hệ điều hành máy chủ
echo __LINE__;    // Dòng hiện tại trong file
echo __FILE__;    // Đường dẫn file hiện tại
?>
```

---

## 5. Quy tắc đặt tên hằng số

- Thường viết **IN HOA** để dễ phân biệt: `MAX_USERS`, `SITE_URL`, ...  
- Không cần dấu `$` ở trước tên.  
- Không nên trùng tên với hằng số hoặc biến khác.

---

## 💡 Tóm lại

- Hằng số giúp đảm bảo **giá trị không bị thay đổi**.  
- Dùng `define()` hoặc `const` tùy theo vị trí và mục đích.  
- Ghi nhớ: **Không có dấu `$` và không thể thay đổi sau khi khai báo.**

---
