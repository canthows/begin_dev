# WHERE, ORDER BY và LIMIT  

**Tìm kiếm - Lọc dữ liệu, Sắp Xếp và Giới hạn trong MySQL**:  

- Tìm kiếm - Lọc dữ liệu với `WHERE` trong MySQL.
- Sắp xếp dữ liệu với `ORDER BY`.
- Giới hạn số lượng bản ghi với `LIMIT`.


## 🔍 WHERE  

#### 1. So sánh: 

Sử dụng các toán tử: `=`, `!=` (hoặc `<>`), `>`, `<`, `>=`, `<=`.  

```sql
SELECT * FROM users
WHERE name = 'John';
```
👉 Lấy tất cả người dùng có tên John.

#### 2. LIKE (so khớp mẫu):
```sql
SELECT * FROM users
WHERE name LIKE 'J%'; -- Lấy tất cả người dùng tên bắt đầu bằng 'J'

SELECT * FROM users
WHERE name LIKE '%n'; -- Lấy tất cả người dùng tên kết thúc bằng n

SELECT * FROM users
WHERE name LIKE '%oh%'; -- Lấy tất cả người dùng tên chứa chuỗi 'oh'
```

#### 3. IN (kiểm tra trong danh sách):

Lọc các giá trị có nằm trong danh sách.  

```sql
SELECT * FROM users WHERE id IN (1, 2, 3);
```

#### 4. BETWEEN (khoảng giá trị):

Lọc giá trị trong một khoảng, bao gồm cả hai giới hạn.  

```sql
SELECT * FROM orders WHERE id BETWEEN 1 AND 3;
```


#### 5. Nhiều điều kiện (AND, OR):  
```sql
SELECT * FROM users WHERE age > 18 AND city = 'Hanoi';
```
👉 Lấy người dùng trên 18 tuổi (`age`) và sống ở Hà Nội (`city`).  

```sql
SELECT * FROM users WHERE id > 1 AND ho_ten LIKE '%Ca%';
```
👉 Lấy người dùng có `id` lớn hơn 1 và `ho_ten` có chứa chữ `Ca`.

```sql
SELECT * FROM orders WHERE user_id = 1 OR user_id = 2;
```
👉 Lấy người dùng có `user_id` là 1 hoặc 2.



## 📚 ORDER BY
 Sắp xếp dữ liệu tăng dần hoặc giảm dần.  

Cú pháp:
```sql
SELECT * FROM users
ORDER BY age ASC;

SELECT * FROM users
ORDER BY age DESC;

SELECT * FROM users
ORDER BY RAND();
```
- `ASC` → tăng dần (mặc định)
- `DESC` → giảm dần
- `RAND()` → ngẫu nhiên (mỗi lần chạy sẽ ra kết quả khác nhau)


## ⏹ LIMIT
Giới hạn số lượng bản ghi trả về. Dùng để phân trang hoặc lấy top N dữ liệu.

Cú pháp:
```sql
SELECT * FROM users
LIMIT 5;      -- Lấy 5 bản ghi đầu
SELECT * FROM users
LIMIT 10,5;   -- Bỏ qua 10 bản ghi đầu, lấy 5 bản ghi tiếp theo
```


## 🔗 Kết hợp  

#### Ví dụ 1: Tìm kiếm + sắp xếp + giới hạn

```sql
SELECT * FROM users
WHERE city = 'Hanoi'
ORDER BY age DESC
LIMIT 3;
```
👉 Lấy 3 người dùng lớn tuổi nhất ở Hà Nội.

#### Ví dụ 2: Tìm kiếm với LIKE + phân trang

```sql
SELECT * FROM users
WHERE name LIKE 'J%'
ORDER BY name ASC
LIMIT 0, 10;
```
👉 Lấy 10 người dùng tên bắt đầu bằng 'J', sắp xếp theo tên.



#### 💻 Sử dụng trong PHP
```php
<?php
$conn = new mysqli('localhost', 'root', 'pass', 'testdb');
$conn->set_charset('utf8');


$sql = "SELECT * FROM users WHERE name LIKE 'J%' ORDER BY age DESC LIMIT 5";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo $row['id'] . ' - ' . $row['name'] . ' - ' . $row['age'] . '<br>';
	}
} else {
	echo "Không có  kết quả";
}


$conn->close();
?>
```
👉 Hiển thị 5 người dùng tên bắt đầu bằng 'J', sắp xếp theo tuổi giảm dần.



#### ✅ Tóm tắt
- `WHERE` / `LIKE` → tìm kiếm dữ liệu.
- `ORDER BY` → sắp xếp.
- `LIMIT` → giới hạn số lượng bản ghi.

