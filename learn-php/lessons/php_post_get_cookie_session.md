# 🧩 POST, GET, COOKIE và SESSION trong PHP

Trong PHP, việc **giao tiếp giữa client (trình duyệt)** và **server (máy
chủ)** thường diễn ra thông qua **biến toàn cục** như `$_GET`, `$_POST`,
`$_COOKIE`, và `$_SESSION`. Đây là các công cụ cơ bản giúp bạn lưu trữ
và truyền dữ liệu trong quá trình người dùng tương tác với trang web.

------------------------------------------------------------------------

## 🚀 1. Phương thức GET

Phương thức **GET** gửi dữ liệu lên server **thông qua URL**.

### 🔹 Cách hoạt động

-   Dữ liệu được nối vào cuối URL sau dấu `?`
-   Ví dụ: `https://example.com/page.php?name=CaRo&age=25`

### 🔹 Cách nhận dữ liệu

``` php
<?php
$name = $_GET['name'];
$age = $_GET['age'];
echo "Tên: $name, Tuổi: $age";
?>
```

### ⚠️ Lưu ý

-   GET có giới hạn độ dài (tùy trình duyệt, khoảng 2000 ký tự)
-   Không nên dùng GET cho dữ liệu nhạy cảm (như mật khẩu)

------------------------------------------------------------------------

## 📨 2. Phương thức POST

Phương thức **POST** gửi dữ liệu trong **phần thân (body)** của HTTP
request, **không hiển thị trên URL**.

### 🔹 Ví dụ form POST

``` html
<form method="POST" action="submit.php">
  Tên: <input type="text" name="name"><br>
  <button type="submit">Gửi</button>
</form>
```

### 🔹 Xử lý trong PHP

``` php
<?php
$name = $_POST['name'];
echo "Xin chào, $name!";
?>
```

### ⚠️ Lưu ý

-   POST an toàn hơn GET
-   Không giới hạn dung lượng dữ liệu (tùy cấu hình server)

------------------------------------------------------------------------

## 🍪 3. COOKIE trong PHP

Cookie là **dữ liệu được lưu trên trình duyệt của người dùng**. Dùng để
ghi nhớ thông tin giữa các lần truy cập.

### 🔹 Tạo cookie

``` php
<?php
setcookie('username', 'CaRo', time() + 3600); // tồn tại 1 giờ
echo "Cookie đã được tạo!";
?>
```

### 🔹 Đọc cookie

``` php
<?php
echo $_COOKIE['username'];
?>
```

### 🔹 Xóa cookie

``` php
<?php
setcookie('username', '', time() - 3600);
?>
```

### ⚠️ Lưu ý

-   Cookie lưu trên máy người dùng
-   Có thể bị chỉnh sửa =\> không nên lưu thông tin quan trọng

------------------------------------------------------------------------

## 🔐 4. SESSION trong PHP

Session là **cách lưu dữ liệu tạm thời trên server**, khác với cookie
lưu ở trình duyệt.

### 🔹 Bắt đầu session

``` php
<?php
session_start(); // Luôn đặt đầu file PHP
$_SESSION['username'] = 'CaRo';
echo "Session đã được tạo!";
?>
```

### 🔹 Đọc session

``` php
<?php
session_start();
echo $_SESSION['username'];
?>
```

### 🔹 Xóa session

``` php
<?php
session_start();
unset($_SESSION['username']); // Xóa 1 biến
session_destroy(); // Xóa toàn bộ session
?>
```

### ⚠️ Lưu ý

-   Session tự động bị xóa khi đóng trình duyệt (hoặc sau thời gian
    timeout)
-   PHP quản lý session qua **PHPSESSID** (một cookie tự động tạo ra)

------------------------------------------------------------------------

## 🧠 Tổng kết

-   **GET**: truyền dữ liệu qua URL (dễ thấy, không an toàn)
-   **POST**: gửi dữ liệu ẩn, an toàn hơn
-   **COOKIE**: lưu trữ thông tin nhỏ trên trình duyệt
-   **SESSION**: lưu trữ tạm trên server để nhận dạng người dùng

> 🔸 Hiểu và sử dụng đúng từng loại giúp bạn xây dựng ứng dụng PHP linh
> hoạt và bảo mật hơn.
