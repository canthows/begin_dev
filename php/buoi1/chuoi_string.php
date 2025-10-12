<?php
header('Content-Type: text/html; charset=utf-8');
?>
<head>
  <meta charset="UTF-8">
</head>

<?php
	echo "Đây là bài chuỗi<br>";
	
	$chuoi = "hôm NAY trời đẹp quá, mưa bỏ mẹ";
	$chuoi2 = "xin chao cac ban";
	
	
	$sodienthoai = "Token:AAAEEEfsf0912dljkk0912666555sfjjshjf365bhhs45dgdg.INFOsfsf";
	
	echo $chuoi;
	
	echo strlen($chuoi)."<br>";
	
	echo "Chuyển thành chữ hoa: ".mb_strtoupper($chuoi, 'UTF-8');
	echo "<br>Chuyển thành chữ thường: ".strtolower($chuoi);
	echo "<br>Viết hoa chữ đầu tiên: ".ucfirst($chuoi);
	
	$chi_so = preg_replace('/\D/', '', $sodienthoai);
	
	echo $chi_so;
	
	// Tìm chuỗi trong chuỗi
	$chuoi_cha = "Hôm nay trời đẹp, abc là chuỗi cần tìm, abcxyz là chuỗi con dài hơn.";
	$chuoi_con = "abc";
	
	echo "<br>Tìm thấy chuỗi <strong>{$chuoi_con}</strong> tại vị trí: ".strpos($chuoi_cha, $chuoi_con)."";
	echo "<br>Số lần chuỗi <strong>{$chuoi_con}</strong> xuất hiện: ".substr_count($chuoi_cha, $chuoi_con)."";