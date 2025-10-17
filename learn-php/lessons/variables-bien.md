# 💡 Biến số trong PHP

Biến số là nơi để **lưu trữ hay gán dữ liệu** (như số, chữ) trong PHP.

***

## Khai báo và Quy tắc


 - **Cách khai báo biến**  

Biến trong PHP bắt đầu bằng dấu `$`:

```php
<?php
$ten = "Nguyễn Văn A";
$tuoi = 25;
$diem = 8.5;

?>
```

 - **Quy tắc đặt tên:** 

	1. Luôn bắt đầu bằng `$`.
	2. Phải bắt đầu bằng **chữ cái** hoặc **dấu gạch dưới** (`_`).
	3. PHP phân biệt **chữ hoa và chữ thường** (`$ten` khác `$Ten`).
	4. Tên biến không được chứa dấu cách.

## Kiểu Dữ liệu thường dùng

```php
<?php
$ten = "PHP";           // Chuỗi
$tuoi = 30;             // Số nguyên
$gia = 99.5;            // Số thập phân
$co_tai_khoan = true;   // true/false
?>
```

## Sử dụng biến

```php
<?php
$san_pham = "Laptop";
$gia = 15000000;

echo $san_pham;              // In ra: Laptop
echo "Giá: $gia";            // In ra: Giá: 15000000
?>
```

## Lưu ý

- Đặt tên biến có ý nghĩa
- PHP tự nhận biết kiểu dữ liệu
- Biến có thể thay đổi giá trị