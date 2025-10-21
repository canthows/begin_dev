# 🤝 SELECT JOIN trong MySQL

Trong MySQL, **JOIN** dùng để **kết hợp dữ liệu từ nhiều bảng** dựa trên mối quan hệ giữa các cột của chúng.

Ví dụ, bạn có hai bảng:

#### Bảng `users`  

| id | ho_ten |
|----|--------|
| 1 | An |
| 2 | Bảo |
| 3 | Caro |

#### Bảng `orders`  

| id | user_id | san_pham |
|----|---------|----------|
| 1 | 1 | Máy cà phê |
| 2 | 2 | Máy xay |
| 3 | 1 | Lò nướng |
| 4 | 4 | Vi sóng |

#### 🔗 Ví dụ cơ bản

👉 Lấy danh sách **tên người dùng** và **sản phẩm họ mua**:

```sql
SELECT users.ho_ten, orders.san_pham
FROM users
JOIN orders ON users.id = orders.user_id;
```

Kết quả:  

| ho_ten | san_pham |
|--------|----------|
| An | Máy cà phê |
| Bảo | Máy xay |
| An | Lò nướng |

#### <span style="font-size:2em; font-weight:bold;">Các loại JOIN:</span>  


Hình dưới đây mô tả trực quan các loại JOIN phổ biến giữa hai bảng:  

![Sơ đồ JOIN trong MySQL](https://media.geeksforgeeks.org/wp-content/uploads/20200314221726/JOIN.jpg)

## 1️⃣ INNER JOIN
Chỉ lấy những bản ghi có dữ liệu **trùng khớp ở cả hai bảng**.  
`INNER JOIN` tương tự với lệnh `JOIN`    

```sql
SELECT users.ho_ten, orders.san_pham
FROM users
INNER JOIN orders ON users.id = orders.user_id;
```

Kết quả:  

| ho_ten | san_pham |
|--------|----------|
| An | Máy cà phê |
| Bảo | Máy xay |
| An | Lò nướng |

## 2️⃣ LEFT JOIN
Lấy **tất cả bản ghi bên trái (users)**, kể cả khi **không có dữ liệu bên phải (orders)**.

```sql
SELECT users.ho_ten, orders.san_pham
FROM users
LEFT JOIN orders ON users.id = orders.user_id;
```

Kết quả:  

| ho_ten | san_pham |
|--------|----------|
| An | Máy cà phê |
| An | Lò nướng |
| Bảo | Máy xay |
| Caro | NULL |

## 3️⃣ RIGHT JOIN
Ngược lại với LEFT JOIN: lấy **tất cả bản ghi bên phải (orders)**, kể cả khi **không có dữ liệu bên trái (users)**.

```sql
SELECT users.ho_ten, orders.san_pham
FROM users
RIGHT JOIN orders ON users.id = orders.user_id;
```

Kết quả:  

| ho_ten | san_pham |
|--------|----------|
| An | Máy cà phê |
| Bảo | Máy xay |
| An | Lò nướng |
| NULL | Vi sóng |

## ⚙️ Kết hợp điều kiện và sắp xếp

Bạn có thể kết hợp **WHERE** hoặc **ORDER BY** với JOIN:

```sql
SELECT users.ho_ten, orders.san_pham
FROM users
JOIN orders ON users.id = orders.user_id
WHERE orders.san_pham LIKE '%Máy%'
ORDER BY users.ho_ten ASC;
```

Kết quả:  

| ho_ten | san_pham |
|--------|----------|
| An | Máy cà phê |
| Bảo | Máy xay |

## 📌 Ghi nhớ nhanh
| Kiểu JOIN | Lấy dữ liệu từ |
|------------|----------------|
| JOIN (INNER JOIN) | Cả 2 bảng, chỉ phần giao nhau |
| LEFT JOIN | Tất cả bên trái + phần khớp bên phải |
| RIGHT JOIN | Tất cả bên phải + phần khớp bên trái |