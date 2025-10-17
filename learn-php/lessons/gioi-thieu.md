# PHP Căn bản

- **Dự án PHP Basic cho người mới bắt đầu**<br>
  Thư viện này sẽ đi từ cơ bản nhất cho người mới học lập trình PHP để có thể làm ra một trang web.
  Nó không bao gồm tất cả các kiến thức từ A tới Z của PHP nhưng nó sẽ chọn lọc những thứ cơ bản và thường sử dụng nhất.
  Các kiến thức nâng cao sẽ từ từ được đề cập tới trong quá trình Build sản phẩm.
  
- **Không có code NGU, chỉ có code CHẠY hay KHÔNG CHẠY**<br>
	- Code **chạy được**: Thiên tài  
	- Code **chạy nhưng không hiểu tại sao**: Huyền thoại  
	- Code **không chạy mà vẫn deploy**: Siêu nhân  
	- Code **chạy được mà không ai dám sửa**: đó gọi là **Nghệ thuật 🧠💥**

	
	-------------
	Code của bạn có thể tới 10-20 dòng, Code của mấy thằng PRO HỌC NHIỀU có thể chỉ cần 2 dòng.
	
	Điều đó méo quan trọng,
	
	Mục đích cuối cùng là Product của bạn có **CHẠY hay KHÔNG** ??
	
	Quan trọng nhất là **Tư Duy** của bạn để tìm cách làm cho nó hoạt động.
	
	Bất kể thằng PRO nào cũng từ GÀ mà đi lên. Kaka
	
## PHP hoạt động như thế nào?

	PHP là ngôn ngữ phía máy chủ (server-side language), nghĩa là mã PHP được xử lý trên máy chủ trước khi gửi đến trình duyệt.
	Trình duyệt chỉ nhận kết quả cuối cùng (thường là HTML), chứ không thấy mã PHP.

	Quy trình hoạt động cơ bản:

		1. Trình duyệt gửi yêu cầu đến file .php

		2. Máy chủ (Apache, Nginx, v.v.) chạy trình thông dịch PHP

		3. PHP xử lý mã nguồn, có thể kết nối CSDL (MySQL, MariaDB, v.v.)

		4. Kết quả được chuyển thành HTML thuần và gửi về trình duyệt
	Minh họa dòng chảy dữ liệu:
	
		`Trình duyệt  →  Server (Apache/Nginx)  →  PHP  →  HTML kết quả`

## Cài đặt môi trường PHP
Để chạy được mã PHP, bạn cần cài môi trường có máy chủ web + PHP + MySQL (tùy chọn).

- 💻 Cách cài phổ biến 
	- Trên Windows hoặc MAC, cài XAMPP để có sẵn máy chủ Local (Localhost)
	- Trên Linux thì thường sẽ có sẵn khi cài đặt quản trị VPS
	- Trên Host thì thường đã được nhà cung cấp cài sẵn

Cách cài đặt các bạn tự tìm hiểu Video trên mạng rất nhiều! Ở đây chỉ tập trung viết code thôi.
## License

This project is licensed under the [MIT license](https://github.com/canthows/begin_dev/blob/main/LICENSE).

Themes base on [Docsify](https://docsify.js.org) and [Docsify-themeable](https://github.com/jhildenbiddle/docsify-themeable).

Copyright (c) canthows ([@canthows](https://github.com/canthows)).
