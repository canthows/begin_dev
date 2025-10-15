# Các hàm làm việc với chuỗi trong PHP

## 1. Giới thiệu
Tổng quan các hàm xử lý chuỗi thường dùng: strlen, strtoupper, strtolower, ucfirst, ucwords, str_replace, substr.

## 2. Ví dụ minh họa

```php
<?php
$str = "xin chao hoc php";
echo strlen($str); // độ dài
echo strtoupper($str); // chữ hoa
echo ucfirst($str); // viết hoa ký tự đầu
?>
```

## 3. Bài tập
- 1. Viết chương trình: cho chuỗi 'hoc php co ban' -> in hoa toàn bộ, in mỗi từ viết hoa, in độ dài.
