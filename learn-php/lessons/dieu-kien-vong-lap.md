# 🔁 Điều kiện và Vòng lặp trong PHP

## 1. Cấu trúc điều kiện (`if`, `else`, `elseif`)

Cấu trúc điều kiện dùng để **kiểm tra điều kiện và thực thi mã** tương ứng.

 - **Cú pháp cơ bản:**
```php
	$a = 10;
	$b = 5;

	if ($a > $b) {
		echo "A lớn hơn B";
	} elseif ($a == $b) {
		echo "A bằng B";
	} else {
		echo "A nhỏ hơn B";
	}
```

 - **Ví dụ:**
```php
	$age = 20;
	if ($age >= 18) {
		echo "Đủ tuổi trưởng thành";
	} else {
		echo "Chưa đủ tuổi";
	}
```
---

## 2. Toán tử điều kiện ngắn (Ternary Operator)

Toán tử **`?:`** giúp viết ngắn gọn câu lệnh `if...else` trong một dòng.

 - **Cú pháp:**
```php
$bien = (điều_kiện) ? (giá_trị_nếu_đúng) : (giá_trị_nếu_sai);
```

 - **Ví dụ:**
```php
$age = 18;
$message = ($age >= 18) ? "Đủ tuổi" : "Chưa đủ tuổi";
echo $message; // Kết quả: Đủ tuổi
```

💡 **Mẹo:** Toán tử `?:` rất hữu ích khi cần gán giá trị đơn giản mà không muốn viết `if...else` dài dòng.

---

## 3. Toán tử so sánh và logic

| Toán tử | Ý nghĩa        | Ví dụ |
|----------|----------------|--------|
| ==  | Bằng nhau        | `$a == $b` |
| !=  | Khác nhau        | `$a != $b` |
| >   | Lớn hơn          | `$a > $b` |
| <   | Nhỏ hơn          | `$a < $b` |
| &&  | Và (AND)         | `$a > 0 && $b > 0` |
| \|\| | Hoặc (OR)       | `$a > 0 || $b > 0` |
| !   | Phủ định (NOT)   | `!$a` |

 - **Ví dụ:**
 
```php
	$a = 10;
	$b = 5;

	// So sánh cơ bản
	if ($a == $b) {
		echo "A bằng B";
	} elseif ($a != $b) {
		echo "A khác B"; // Kết quả: A khác B
	}

	// So sánh lớn hơn / nhỏ hơn
	if ($a > $b) {
		echo "<br>A lớn hơn B"; // Kết quả: A lớn hơn B
	}

	// Kết hợp điều kiện logic
	if ($a > 0 && $b > 0) {
		echo "<br>Cả hai số đều dương";
	}

	// Phủ định điều kiện
	if (!($a < $b)) {
		echo "<br>A không nhỏ hơn B";
	}
```

---

## 4. Cấu trúc `switch`

Dùng khi có **nhiều trường hợp cần kiểm tra**.

```php
$day = "Mon";

switch ($day) {
    case "Mon":
        echo "Hôm nay là Thứ Hai";
        break;
    case "Tue":
        echo "Hôm nay là Thứ Ba";
        break;
    default:
        echo "Ngày khác";
}
```

---

## 5. Vòng lặp trong PHP

### 🔁 `for`
Dùng khi **biết trước số lần lặp**.

```php
for ($i = 1; $i <= 5; $i++) {
    echo "Số: $i <br>";
}
```

### 🔁 `while`
Lặp **khi điều kiện còn đúng**.

```php
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}
```

### 🔁 `do...while`
Chạy **ít nhất một lần**, dù điều kiện sai.

```php
$i = 1;
do {
    echo $i;
    $i++;
} while ($i <= 5);
```

### 🔁 `foreach`
Dùng cho **mảng**.

```php
$names = ["An", "Bình", "Chi"];
foreach ($names as $name) {
    echo "Xin chào $name <br>";
}
```

---

## 6. Từ khóa `break` và `continue`

- `break` → Dừng vòng lặp.
- `continue` → Bỏ qua vòng hiện tại, sang vòng tiếp theo.

```php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) continue; // bỏ qua 3
    if ($i == 5) break;    // dừng tại 5
    echo $i . " ";
}
```

---

## 🎯 Bài tập thực hành

1. Viết chương trình kiểm tra xem một số `$n` là **chẵn** hay **lẻ**.  
2. In ra các số từ 1 đến 100, **bỏ qua** các số chia hết cho 5.  
3. Tạo một mảng tên học sinh, dùng `foreach` để in lời chào cho từng học sinh.  

---

💡 **Gợi ý thêm:**  
Khi viết điều kiện hoặc vòng lặp, luôn đảm bảo **có điều kiện dừng rõ ràng** để tránh lặp vô hạn.
---
