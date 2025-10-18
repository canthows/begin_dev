# Cấu trúc hệ thống dự án **Mini CMS**

---

## 📁 Cấu trúc thư mục chính  

Dưới đây là sơ đồ thư mục và các file của dự án:

```
mini_cms/
├── assets/
│   ├── css/
│   └── js/
├── includes/
│   ├── config.php
│   ├── database.php
│   └── functions.php
├── modules/
│   ├── home/
│   ├── dashboard/
│   ├── login/
│   ├── logout/
│   ├── user/
│   ├── post/
│   └── category/
├── themes/
│   ├── header.php
│   └── footer.php
├── index.php
├── .htaccess
```

### `/assets/`  
Chứa các tài nguyên tĩnh như CSS, JavaScript, hình ảnh.  

### `/includes/`  
Chứa các file hỗ trợ chung cho toàn ứng dụng. Ví dụ: `config.php`, `database.php`, `functions.php`.  

### `/modules/`  
Chứa các module – mỗi module là một phần chức năng riêng biệt của ứng dụng (ví dụ: home, user).
 - **Cấu trúc các file trong modules:**  
 Để hệ thống tự động nhận diện và xử lý chính xác, cần đặt tên file theo đúng cấu trúc. Ví dụ:  
   - Thư mục `home` thì sẽ có file `home_controls.php` để xử lý các code và dữ liệu, `home_view.php` chứa các mã HTML kèm PHP để hiển thị dữ liệu
   - Thư mục `user` thì sẽ có file `user_controls.php` để xử lý các code và dữ liệu, `user_view.php` chứa các mã HTML kèm PHP để hiển thị dữ liệu
   
   **Lấy `{tên_thư_mục}` làm tiền tố đặt tên file, cấu trúc sẽ là `{tên_thư_mục}_controls.php` và `{tên_thư_mục}_view.php`**

### `/themes/`  
Chứa các giao diện (view/templates) có thể chuyển đổi.

### `index.php`  
Điểm khởi đầu của ứng dụng — xử lý route, xác định module hiện hành, load các phần cần thiết.

### `.htaccess`  
Định nghĩa cấu hình Apache để hỗ trợ URL đẹp hơn hoặc điều hướng.

---

## ⚙️ Quy trình xử lý (Flow)  

1. Người dùng truy cập URL, ví dụ: `https://yourdomain.com/home`  
2. `index.php` nhận request và xác định module hiện hành.  
3. `index.php` load file cấu hình từ `/includes/config.php`.  
4. `index.php` tìm trong `/modules/home/` các file chức năng (home_controls.php, home_view.php).  
5. `home_controls.php` xử lý logic, dữ liệu.  
6. `home_view.php` lấy dữ liệu từ `_controls.php` để render giao diện.  
7. Trả về HTML cho người dùng.  
8. Các tài nguyên tĩnh (CSS/JS) được phục vụ từ `/assets/`.

---

## 📦 Thành phần chính và nhiệm vụ
| Thành phần       | Vị trí thư mục            | Nhiệm vụ chính                                |
|------------------|---------------------------|--------------------------------------------------|
| `config.php`     | `/includes/`              | Định nghĩa hằng số, đường dẫn, cấu hình chung.  |
| `database.php`   | `/includes/`              | Kết nối và xử lý database.                       |
| `functions.php`  | `/includes/`              | Các hàm hỗ trợ chung toàn ứng dụng.              |
| Modules          | `/modules/{module_name}/` | Chứa controller, model, view cho module đó.      |
| Themes           | `/themes/`                | Chứa giao diện, template cho ứng dụng.           |
| Assets           | `/assets/`                | CSS/JS/hình ảnh – phần front-end tĩnh.          |
