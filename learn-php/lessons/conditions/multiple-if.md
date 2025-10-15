# If nhiều điều kiện & kiểm tra file upload (ví dụ)

Ví dụ kiểm tra file upload đơn giản (tập trung logic PHP, chưa có HTML form):

```php
<?php
// Giả sử $_FILES['file'] đã được gửi từ form
// Kiểm tra lỗi upload, kích thước và kiểu file
$maxSize = 2 * 1024 * 1024; // 2MB
$allowed = ['image/jpeg','image/png'];

if (!isset($_FILES['file'])) {
    echo 'Không có file được gửi.';
} elseif ($_FILES['file']['error'] !== UPLOAD_ERR_OK) {
    echo 'Lỗi upload: ' . $_FILES['file']['error'];
} elseif ($_FILES['file']['size'] > $maxSize) {
    echo 'File quá lớn.';
} elseif (!in_array($_FILES['file']['type'], $allowed)) {
    echo 'Loại file không được phép.';
} else {
    // Di chuyển file tới thư mục uploads
    $dest = __DIR__ . '/uploads/' . basename($_FILES['file']['name']);
    if (move_uploaded_file($_FILES['file']['tmp_name'], $dest)) {
        echo 'Upload thành công.';
    } else {
        echo 'Không thể lưu file.';
    }
}
?>
```

**Gợi ý bảo mật:** Luôn kiểm tra MIME type, extension, và sử dụng tên file an toàn để tránh overwrite hoặc path traversal.
