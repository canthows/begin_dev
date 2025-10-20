# 🧩 include và require trong PHP

Trong lập trình PHP, các hàm **`include`** và **`require`** dùng để
**chèn nội dung của một file khác** vào file hiện tại. Điều này giúp
chia nhỏ mã nguồn thành các phần dễ quản lý, tái sử dụng và bảo trì.

------------------------------------------------------------------------

#### Tại sao cần dùng include / require

Thay vì viết lại cùng một đoạn mã (như header, footer, menu...) trong
nhiều file, bạn có thể đặt chúng vào một file riêng và **gọi lại khi
cần**.

Ví dụ:

    header.php
    footer.php
    config.php

Sau đó trong các trang khác (như `index.php`, `about.php`) chỉ cần
include file tương ứng.

------------------------------------------------------------------------

## 🔹 include

Câu lệnh `include` **chèn file được chỉ định** vào vị trí gọi nó.

### 📜 Cú pháp

``` php
include 'ten_file.php';
```

### 💡 Ví dụ

``` php
<?php
include 'header.php';
echo "<h1>Trang chủ</h1>";
include 'footer.php';
?>
```

### ⚠️ Lưu ý

-   Nếu file không tồn tại, PHP **chỉ cảnh báo (warning)** và **vẫn tiếp
    tục chạy** phần còn lại của mã.

------------------------------------------------------------------------

## 🔸 require

`require` hoạt động tương tự `include`, **nhưng nghiêm ngặt hơn**.

### 📜 Cú pháp

``` php
require 'ten_file.php';
```

### 💡 Ví dụ

``` php
<?php
require 'config.php'; // Nếu file không tồn tại, chương trình sẽ dừng lại
echo "Đang chạy website!";
?>
```

### ⚠️ Lưu ý

-   Nếu file bị thiếu hoặc lỗi, PHP **ngừng thực thi ngay lập tức**
    (fatal error).
-   Thường dùng `require` cho **file quan trọng** như cấu hình, kết nối
    CSDL...

------------------------------------------------------------------------

## ⚙️ include_once và require_once

Khi một file có thể được gọi nhiều lần, bạn nên dùng phiên bản `*_once`
để **tránh chèn trùng lặp**.

### 🔹 include_once

``` php
include_once 'functions.php';
```

Nếu file đã được include trước đó, PHP sẽ **bỏ qua**.

### 🔸 require_once

``` php
require_once 'config.php';
```

Tương tự, nhưng dừng chương trình nếu file không tồn tại.

------------------------------------------------------------------------

## ⇄ So sánh

  --------------------------------------------------------------------------------
  Lệnh           Khi file không tồn tại   Có thể gọi nhiều lần   Thường dùng cho
  -------------- ------------------------ ---------------------- -----------------
  include        Cảnh báo, tiếp tục chạy  ✅                     Header, Footer

  require        Dừng chương trình        ✅                     Cấu hình quan
                                                                 trọng

  include_once   Cảnh báo, bỏ qua nếu     ❌                     Các hàm hoặc thư
                 trùng                                           viện phụ

  require_once   Dừng chương trình, bỏ    ❌                     File cấu hình
                 qua nếu trùng                                   chính
  --------------------------------------------------------------------------------

------------------------------------------------------------------------

## 💬 Ví dụ thực tế

Giả sử bạn có cấu trúc:

    project/
    ├── header.php
    ├── footer.php
    ├── content.php
    └── index.php

#### 📄 header.php

``` php
<h1>Trang web của tôi</h1>
<hr>
```

#### 📄 footer.php

``` php
<hr>
<p>Bản quyền © 2025</p>
```

#### 📄 index.php

``` php
<?php
include 'header.php';
include 'content.php';
include 'footer.php';
?>
```

Khi chạy `index.php`, nội dung 3 file sẽ **được hợp nhất lại** thành một
trang hoàn chỉnh.

------------------------------------------------------------------------

#### Tổng kết

-   `include`: chèn file, nếu lỗi vẫn chạy tiếp.
-   `require`: chèn file, nếu lỗi thì dừng.
-   `include_once` và `require_once`: ngăn trùng lặp.

> 💡 Sử dụng đúng loại giúp mã PHP của bạn dễ bảo trì, rõ ràng và chuyên
> nghiệp hơn!
