# Bài học PHP: Mảng (Array)

## 1. Mảng là gì?
Mảng là một cấu trúc dữ liệu lưu trữ nhiều giá trị trong một biến duy nhất. Mỗi giá trị được truy cập thông qua một chỉ số (index) hoặc khóa (key).

## 2. Các loại mảng trong PHP
- **Mảng số (Indexed Array)**: Chỉ số là số nguyên, bắt đầu từ 0.
- **Mảng kết hợp (Associative Array)**: Chỉ số là chuỗi (key).
- **Mảng đa chiều (Multidimensional Array)**: Mảng chứa các mảng khác.

## 3. Tạo mảng
### Mảng số
```php
$fruits = array("Táo", "Cam", "Chuối");
// Hoặc cách ngắn gọn:
$fruits = ["Táo", "Cam", "Chuối"];
```

### Mảng kết hợp
```php
$person = array(
    "name" => "Nguyễn Văn A",
    "age" => 25,
    "city" => "Hà Nội"
);
// Hoặc:
$person = [
    "name" => "Nguyễn Văn A",
    "age" => 25,
    "city" => "Hà Nội"
];
```

### Mảng đa chiều
```php
$students = [
    ["name" => "An", "age" => 20],
    ["name" => "Bình", "age" => 22]
];
```

## 4. In mảng
Sử dụng hàm `print_r()` để in toàn bộ mảng:
```php
print_r($fruits);
print_r($person);
print_r($students);
```
**Kết quả**:
```
Array
(
    [0] => Táo
    [1] => Cam
    [2] => Chuối
)
Array
(
    [name] => Nguyễn Văn A
    [age] => 25
    [city] => Hà Nội
)
Array
(
    [0] => Array
        (
            [name] => An
            [age] => 20
        )
    [1] => Array
        (
            [name] => Bình
            [age] => 22
        )
)
```

## 5. Truy cập phần tử mảng
- Mảng số: `$fruits[0]` // Trả về "Táo"
  ```php
  echo "Quả đầu tiên: " . $fruits[0] . "\n";
  ```
  **Kết quả**:
  ```
  Quả đầu tiên: Táo
  ```

- Mảng kết hợp: `$person["name"]` // Trả về "Nguyễn Văn A"
  ```php
  echo "Tên: " . $person["name"] . ", Thành phố: " . $person["city"] . "\n";
  ```
  **Kết quả**:
  ```
  Tên: Nguyễn Văn A, Thành phố: Hà Nội
  ```

- Mảng đa chiều: `$students[0]["name"]` // Trả về "An"
  ```php
  echo "Học sinh đầu tiên: " . $students[0]["name"] . "\n";
  ```
  **Kết quả**:
  ```
  Học sinh đầu tiên: An
  ```

## 6. Thêm phần tử
```php
// Thêm vào mảng số
$fruits[] = "Nho"; // Thêm vào cuối
$fruits[10] = "Xoài"; // Thêm tại chỉ số 10

// Thêm vào mảng kết hợp
$person["email"] = "nva@example.com";
```

## 7. Xóa phần tử
```php
unset($fruits[1]); // Xóa phần tử tại chỉ số 1
unset($person["age"]); // Xóa phần tử có key "age"
```

## 8. Một số hàm thao tác với mảng
- `count($array)`: Đếm số phần tử.
- `array_push($array, $value)`: Thêm phần tử vào cuối.
- `array_pop($array)`: Xóa và trả về phần tử cuối.
- `array_merge($array1, $array2)`: Gộp hai mảng.
- `array_key_exists($key, $array)`: Kiểm tra khóa tồn tại.
- `sort($array)`: Sắp xếp mảng theo giá trị tăng dần.
- `rsort($array)`: Sắp xếp mảng theo giá trị giảm dần.
- `min($array)`: Tìm giá trị nhỏ nhất trong mảng.
- `max($array)`: Tìm giá trị lớn nhất trong mảng.
- `in_array($value, $array)`: Kiểm tra giá trị có trong mảng không.

## 9. Ví dụ tổng hợp
```php
$fruits = ["Táo", "Cam", "Chuối"];
$more_fruits = ["Nho", "Xoài"];
array_push($fruits, "Dưa");
unset($fruits[1]);

print_r($fruits);
echo "Số phần tử: " . count($fruits) . "\n";
echo "Quả đầu tiên: " . $fruits[0] . "\n";

// Gộp mảng
$all_fruits = array_merge($fruits, $more_fruits);
print_r($all_fruits);
echo "Số phần tử sau gộp: " . count($all_fruits) . "\n";

// Sắp xếp mảng
$numbers = [5, 2, 8, 1, 9];
sort($numbers); // Tăng dần
print_r($numbers);
rsort($numbers); // Giảm dần
print_r($numbers);

// Tìm min, max
echo "Giá trị nhỏ nhất: " . min($numbers) . "\n";
echo "Giá trị lớn nhất: " . max($numbers) . "\n";

// Kiểm tra chuỗi trong mảng
$check = in_array("Táo", $all_fruits) ? "Có" : "Không";
echo "Táo có trong mảng all_fruits không? " . $check . "\n";
```
**Kết quả**:
```
Array
(
    [0] => Táo
    [2] => Chuối
    [3] => Dưa
)
Số phần tử: 3
Quả đầu tiên: Táo
Array
(
    [0] => Táo
    [1] => Chuối
    [2] => Dưa
    [3] => Nho
    [4] => Xoài
)
Số phần tử sau gộp: 5
Array
(
    [0] => 1
    [1] => 2
    [2] => 5
    [3] => 8
    [4] => 9
)
Array
(
    [0] => 9
    [1] => 8
    [2] => 5
    [3] => 2
    [4] => 1
)
Giá trị nhỏ nhất: 1
Giá trị lớn nhất: 9
Táo có trong mảng all_fruits không? Có
```

## 10. Lưu ý
- PHP tự động quản lý chỉ số cho mảng số.
- Kiểm tra mảng tồn tại bằng `is_array($variable)`.
- Mảng trong PHP rất linh hoạt, có thể chứa nhiều kiểu dữ liệu.
- Hàm `sort()` và `rsort()` thay đổi trực tiếp mảng gốc.
- Hàm `in_array()` phân biệt chữ hoa/thường.