# Cấu trúc hệ thống dự án **short_mvc**

---

## 🧱 Cấu trúc thư mục chính  

Dưới đây là sơ đồ thư mục theo dạng cây giúp dễ quan sát hơn:

```
short_mvc/
├── assets/
│   ├── css/
│   ├── js/
│   └── img/
├── includes/
│   ├── config.php
│   ├── database.php
│   └── functions.php
├── modules/
│   ├── home/
│   │   ├── controller.php
│   │   ├── model.php
│   │   └── view.php
│   └── user/
│       ├── controller.php
│       ├── model.php
│       └── view.php
├── themes/
│   ├── default/
│   │   ├── header.php
│   │   ├── footer.php
│   │   └── layout.php
│   └── dark/
│       ├── header.php
│       └── footer.php
├── index.php
├── .htaccess
└── README.md
```

### `/assets/`  
Chứa các tài nguyên tĩnh như CSS, JavaScript, hình ảnh.  

### `/includes/`  
Chứa các file hỗ trợ chung cho toàn ứng dụng. Ví dụ: `config.php`, `database.php`, `functions.php`.  

### `/modules/`  
Chứa các module – mỗi module là một phần chức năng riêng biệt của ứng dụng (ví dụ: home, user).  

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
4. `index.php` tìm trong `/modules/home/` các file chức năng.  
5. Controller xử lý logic, có thể gọi Model để lấy dữ liệu.  
6. Controller load View từ `/themes/` để render giao diện.  
7. Trả về HTML cho người dùng.  
8. Các tài nguyên tĩnh (CSS/JS) được phục vụ từ `/assets/`.

---

## 📦 Thành phần chính và trách nhiệm  
| Thành phần       | Vị trí thư mục            | Trách nhiệm chính                                |
|------------------|---------------------------|--------------------------------------------------|
| `config.php`     | `/includes/`              | Định nghĩa hằng số, đường dẫn, cấu hình chung.  |
| `database.php`   | `/includes/`              | Kết nối và xử lý database.                       |
| `functions.php`  | `/includes/`              | Các hàm hỗ trợ chung toàn ứng dụng.              |
| Modules          | `/modules/{module_name}/` | Chứa controller, model, view cho module đó.      |
| Themes           | `/themes/`                | Chứa giao diện, template cho ứng dụng.           |
| Assets           | `/assets/`                | CSS/JS/hình ảnh – phần front-end tĩnh.          |

---

## 💡 Điểm nổi bật & hạn chế  
### ✅ Ưu điểm  
- Cấu trúc đơn giản, dễ hiểu cho người mới bắt đầu.  
- Tách biệt rõ các phần: assets, includes, modules, themes.  
- Hỗ trợ mô hình module để mở rộng.  
- Dễ tùy chỉnh và phát triển thêm.

### ⚠️ Hạn chế  
- Thiếu tính năng nâng cao của framework lớn (routing phức tạp, middleware, ORM,…).  
- An ninh (security) chưa được nhấn mạnh.  
- Tài liệu hướng dẫn còn mỏng.

---

## 🚀 Gợi ý phát triển tiếp  
- Thêm **Router** mạnh mẽ hơn thay vì chỉ `?modules=` hoặc `/module_name`.  
- Hỗ trợ **middleware** (xác thực, phân quyền).  
- Xây dựng **Model** theo kiểu ActiveRecord hoặc DataMapper.  
- Thêm **API Response** (JSON) và CORS nếu muốn dùng như backend.  
- Xây dựng **CLI**, **tests**, và **logger** cho ứng dụng.

---

# 🧩 Kết luận  
Dự án short_mvc cung cấp một **cấu trúc MVC PHP rất cơ bản và dễ tiếp cận** — phù hợp cho người mới học lập trình web theo mô hình MVC.  
Nếu bạn đang bắt đầu và muốn hiểu rõ “how MVC works”, đây là một nền tảng tốt để xây dựng và mở rộng.
