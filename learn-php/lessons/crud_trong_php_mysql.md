# Làm việc với CSDL MySQL trong PHP


## ⚙️ 1. Kết nối MySQL
Đầu tiên, PHP cần kết nối đến cơ sở dữ liệu MySQL bằng hàm new mysqli().  
Nếu kết nối thất bại (ví dụ sai mật khẩu hoặc tên database), chương trình sẽ dừng lại và hiển thị thông báo lỗi.  
```php
<?php
$conn = new mysqli('localhost', 'root', 'pass', 'testdb');
if ($conn->connect_error) {
    die('Kết nối thất bại: ' . $conn->connect_error);
}
?>
```


## 🧩 2. Create – Thêm dữ liệu (INSERT)

**💡 Ví dụ:**  
Giả sử bạn có cơ sở dữ liệu `testdb` và bảng `users` gồm 3 trường `[id, name, email]` và có 1 bản ghi dữ liệu như sau:  

| id | name | email            |
| -- | ---- | ---------------- |
| 1  | An   | an@example.com   |


👉 Tiến hành Thêm bản ghi mới vào bảng `users`:  
Dùng câu lệnh `INSERT INTO` để thêm bản ghi mới vào bảng.

```php
$name = 'CaRo';
$email = 'caro@example.com';
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
$conn->query($sql);
```

Kết quả bảng sau khi thực hiện query THÊM dữ liệu:   

| id | name | email            |
| -- | ---- | ---------------- |
| 1  | An   | an@example.com   |
| 2  | CaRo | caro@example.com |


## 📜 3. Read – Đọc dữ liệu (SELECT)  
Đây là thao tác lấy dữ liệu ra từ bảng bằng câu lệnh `SELECT`.  

```php
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo $row['id'] . ' - ' . $row['name'] . '<br>';
}
```
👉 Hiển thị danh sách người dùng. Kết quả hiển thị trên trình duyệt:  

```
1 - An
2 - CaRo
```


## ✏️ 4. Update – Cập nhật dữ liệu (UPDATE)  
Dùng `UPDATE` để sửa thông tin của bản ghi đã có.  

```php
$sql = "UPDATE users SET email='new@example.com' WHERE id=1";
$conn->query($sql);
```
👉 Cập nhật địa chỉ `email` của người dùng có `id = 1`.  

💡 Lưu ý:  
Luôn có điều kiện `WHERE`, nếu không sẽ cập nhật toàn bộ bảng!

---

## ❌ 5. Delete – Xóa dữ liệu (DELETE)  
Dùng `DELETE` để xóa bản ghi không còn cần thiết.  

```php
$sql = "DELETE FROM users WHERE id=1";
$conn->query($sql);
```
👉 Xóa người dùng có `id = 1`.  
💡 Chú ý:  
Không nên xóa nhầm toàn bộ bảng — luôn cần `WHERE`.

