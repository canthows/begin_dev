# 🧩 Giới thiệu về PHP

## 1. PHP là gì?

**PHP (Hypertext Preprocessor)** là ngôn ngữ lập trình mã nguồn mở, được dùng phổ biến để **phát triển web động**.  
PHP có thể nhúng trực tiếp vào **HTML**, chạy trên **máy chủ**, và tạo ra **nội dung hiển thị cho người dùng**.

Ví dụ:

```php
<?php
echo "Xin chào, đây là trang PHP đầu tiên!";
?>

🧩 Giới thiệu về PHP
1. PHP là gì?

PHP (Hypertext Preprocessor) là ngôn ngữ lập trình mã nguồn mở được thiết kế đặc biệt cho lập trình web động.
PHP có thể được nhúng trực tiếp vào HTML, chạy trên máy chủ (server) và tạo ra nội dung hiển thị cho người dùng trên trình duyệt.

Ví dụ đơn giản:

<?php
echo "Xin chào, đây là trang PHP đầu tiên!";
?>


Khi chạy, trình duyệt sẽ chỉ hiển thị:

Xin chào, đây là trang PHP đầu tiên!

2. PHP hoạt động như thế nào?

PHP là ngôn ngữ phía máy chủ (server-side language), nghĩa là mã PHP được xử lý trên máy chủ trước khi gửi đến trình duyệt.
Trình duyệt chỉ nhận kết quả cuối cùng (thường là HTML), chứ không thấy mã PHP.

Quy trình hoạt động cơ bản:

Trình duyệt gửi yêu cầu đến file .php

Máy chủ (Apache, Nginx, v.v.) chạy trình thông dịch PHP

PHP xử lý mã nguồn, có thể kết nối CSDL (MySQL, MariaDB, v.v.)

Kết quả được chuyển thành HTML thuần và gửi về trình duyệt

Minh họa dòng chảy dữ liệu:

Trình duyệt → Máy chủ → PHP xử lý → Trả kết quả HTML → Hiển thị

3. Vì sao nên học PHP?

Một số lý do khiến PHP vẫn là lựa chọn hàng đầu cho người mới bắt đầu học lập trình web:

✅ Dễ học, dễ hiểu, cú pháp gần với C, JavaScript

🌐 Hỗ trợ mạnh mẽ cho phát triển website động

💡 Được sử dụng trong nhiều nền tảng lớn như WordPress, Facebook (phiên bản đầu), Wikipedia...

⚙️ Có thể kết hợp với MySQL để tạo ra website quản trị, blog, hay hệ thống thương mại điện tử

🚀 Miễn phí & mã nguồn mở, cộng đồng rất lớn và tài liệu phong phú

4. Cài đặt môi trường PHP

Để chạy được mã PHP, bạn cần cài môi trường có máy chủ web + PHP + MySQL (tùy chọn).

💻 Cách cài phổ biến:
Cách cài	Mô tả
XAMPP / Laragon (Windows)	Dễ cài nhất. Bao gồm Apache, PHP, MySQL. Chỉ cần tải về và chạy.
MAMP (macOS)	Tương tự XAMPP, dành cho người dùng Mac.
Cài thủ công (Linux / Server thật)	Dành cho người đã quen với dòng lệnh, tự cài PHP + Apache/Nginx.
🔍 Kiểm tra PHP sau khi cài đặt:

Mở Terminal hoặc CMD, gõ:

php -v


Kết quả ví dụ:

PHP 8.3.1 (cli) (built: Jan 2025)


➡️ Nếu thấy phiên bản như trên, nghĩa là bạn đã cài PHP thành công ✅