# Cấu trúc

Trong các file PHP, thẻ PHP được dùng để mở và đóng phần mã PHP. Mọi đoạn mã nằm giữa hai thẻ này sẽ được máy chủ (server) thực thi, còn phần nằm ngoài sẽ được hiển thị nguyên văn ra trình duyệt (thường là HTML).

   - Thẻ mở để bắt đầu đoạn mã php là: <code>```<?php```</code>
   - Thẻ đóng để kết thúc đoạn mã php là: <code>```?>```</code>


- **Cấu trúc cơ bản**
```php
<?php
    echo "Đây là câu lệnh in ra màn hình";
?>
```


Kết quả khi chạy trên trình duyệt sẽ hiện ra chữ: 
  > ***Đây là câu lệnh in ra màn hình***

- **Kết hợp PHP và HTML**
 
 Bạn có thể chèn mã PHP xen kẽ với HTML.  
 Ví dụ:
```html
<!DOCTYPE html>
<html>
<head>
    <title>Ví dụ PHP</title>
</head>
<body>
    <h1>Chào bạn!</h1>
    <p>Hôm nay là ngày: <?php echo date("d/m/Y"); ?></p>
</body>
</html>
```
Khi chạy, PHP chỉ xử lý phần nằm trong thẻ `<?php ... ?>`, còn HTML vẫn giữ nguyên.


## Comment code

Comment (chú thích) trong PHP là những dòng mà trình thông dịch PHP sẽ bỏ qua, không thực thi.  
Nó giúp lập trình viên ghi chú, giải thích, hoặc tạm thời vô hiệu hóa một đoạn mã.
 - **Comment một dòng trong PHP:**  
	Sử dụng dấu `//`, hoặc dấu `#` 
	VD:  
	```php
	<?php
	// Đây là một comment một dòng
	echo "Hello PHP!"; // Comment phía sau lệnh
	
	# Cách khác để viết comment
	echo "Xin chào thế giới!";
	
	?>
	```
	
	
 - **Comment nhiều dòng:**  
	Khi muốn chú thích nhiều dòng liên tiếp, hãy dùng cú pháp `/* ... */`  
	VD:  
	```php
	<?php
	/*
		Đây là comment nhiều dòng.
		Bạn có thể ghi chú thích dài,
		giải thích logic của đoạn code phía dưới.
	*/
	echo "Hello PHP!";
	?>
	```

