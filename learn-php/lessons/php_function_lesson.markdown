# Bài học PHP: Hàm (Function)

## 1. Hàm là gì?
Hàm là một khối mã thực hiện một nhiệm vụ cụ thể, có thể được gọi nhiều lần trong chương trình. Hàm giúp mã dễ đọc, tái sử dụng và bảo trì.

## 2. Cú pháp cơ bản
```php
function tenHam($thamSo1, $thamSo2) {
    // Khối mã thực thi
    return $giaTri; // Trả về giá trị (tùy chọn)
}
```

## 3. Tạo và gọi hàm
### Hàm không tham số
```php
function chao() {
    echo "Xin chào!\n";
}
chao();
```
**Kết quả**:
```
Xin chào!
```

### Hàm có tham số
```php
function cong($a, $b) {
    return $a + $b;
}
echo cong(3, 5) . "\n";
```
**Kết quả**:
```
8
```

## 4. Tham số mặc định
```php
function chaoNguoi($ten = "Khách") {
    echo "Xin chào, $ten!\n";
}
chaoNguoi(); // In: Xin chào, Khách!
chaoNguoi("An"); // In: Xin chào, An!
```
**Kết quả**:
```
Xin chào, Khách!
Xin chào, An!
```

## 5. Trả về giá trị
Hàm có thể trả về một giá trị bằng `return`. Nếu không có `return`, hàm trả về `null`.
```php
function binhPhuong($so) {
    return $so * $so;
}
$kq = binhPhuong(4);
echo "Bình phương của 4 là: $kq\n";
```
**Kết quả**:
```
Bình phương của 4 là: 16
```

## 6. Tham số truyền theo tham chiếu
Thay đổi giá trị của biến gốc bằng cách thêm `&` trước tham số.
```php
function tangSo(&$so) {
    $so += 1;
}
$num = 5;
tangSo($num);
echo $num . "\n";
```
**Kết quả**:
```
6
```

## 7. Hàm với mảng làm tham số
```php
function inMang($arr) {
    print_r($arr);
}
$fruits = ["Táo", "Cam", "Chuối"];
inMang($fruits);
```
**Kết quả**:
```
Array
(
    [0] => Táo
    [1] => Cam
    [2] => Chuối
)
```

## 8. Một số hàm tích hợp sẵn
- `strlen($chuoi)`: Đếm độ dài chuỗi.
- `array_sum($mang)`: Tính tổng các phần tử trong mảng.
- `date($dinhDang)`: Lấy ngày giờ hiện tại.
- `is_array($bien)`: Kiểm tra biến có phải mảng không.

## 9. Ví dụ tổng hợp
```php
function tinhTongMang($arr) {
    $tong = array_sum($arr);
    return $tong;
}

function themPhanTu(&$arr, $giaTri) {
    $arr[] = $giaTri;
}

$numbers = [1, 2, 3, 4];
echo "Tổng mảng: " . tinhTongMang($numbers) . "\n";
themPhanTu($numbers, 5);
print_r($numbers);
echo "Tổng mảng sau khi thêm: " . tinhTongMang($numbers) . "\n";
```
**Kết quả**:
```
Tổng mảng: 10
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
Tổng mảng sau khi thêm: 15
```

## 10. Lưu ý
- Hàm trong PHP không phân biệt chữ hoa/thường.
- Tham số mặc định phải đặt sau các tham số không mặc định.
- Sử dụng `return` để kết thúc hàm sớm nếu cần.
- Hàm có thể được định nghĩa trước hoặc sau khi gọi, miễn là trong cùng file hoặc file được include.