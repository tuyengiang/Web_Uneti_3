<?php
	$conn=mysqli_connect("localhost","root","root","blog_demo1");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Đại học kinh tế kỹ thuật cong nghiệp - Demo</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
</head>
<body>
	<div id="header">
		<a href="#" title="Trang Chủ"><img src="img/logo.png"></a>
	</div><!--header-->
	<div id="menu">
		<ul>
			<li><a href="#">Trang Chủ</a></li>
			<li><a href="#">Giới Thiệu</a></li>
			<li><a href="#">Chương Trình ĐT</a>
				
				<ul class="sub-menu">
					<li><a href="#">Đại Học Chính Quy</a></li>
					<li><a href="#">Cao Đẳng Chính Quy</a></li>
					<li><a href="#">Đại Đại Học Chính Quy</a></li>
				</ul><!--menu da cap-->

			</li>
			<li><a href="#">Quy Chế Quy Định</a></li>
			<li><a href="#">Tuyển Sinh</a></li>
			<li style="border-right:none;"><a href="#">Giờ Học</a></li>
		</ul>
	</div><!--menu-->
	<div id="main">
		<div id="main-left">
			<div id="title">Thông Báo</div>
			<?php 
				$sql="SELECT * FROM posts";
				$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
			 ?>
			<div class="main-content">
				<div classs="main-content-title">
					<a href="#"><?php echo $row["title"]; ?></a>
				</div><!--main-conent-title-->
				<div class="main-content-nd">
					<?php echo $row["date_time"]; ?>
			</div><!--main-content-nd-->
		</div>
		<?php endwhile;?>
			
			
			<div class="main-next">
					<a href="#">Xem Thêm</a>
			</div><!--main-next-->
			
		</div><!--main-left-->
		<div id="main-right">
			<div id="title">Đăng Nhập</div>
			<form>
				<label>
					<h4>Mã Sinh Viên:</h4>
					<input type="number" placeholder="Nhập mã sinh viên">
				</label>
				<label>
					<h4>Mật Khẩu:</h4>
					<input type="password" placeholder="Nhập Password">

				</label>
				<label>
					<h4>Mã bảo Vệ</h4>
					<input type="text">
				</label>
				<label><br>
				<input type="radio" name="chon"> SV Đã tốt Nghiệp<br> 
				<input type="radio" name="chon">SV Vẫn Còn Đi Học
				</label><br>
				<button type="submit">Đăng Nhập</button>


			</form>
		</div><!--main-right-->
	</div><!--main-->

	<div style="clear:left;"></div>
	<div id="tin-tuc">
		<div id="title">Tin Tức </div>
		<div class="main-content">
				<div classs="main-content-title">
					<a href="#">Thông báo v/v kiểm tra trình độ Tiếng Anh khóa tuyển sinh năm 2017 </a>
				</div><!--main-conent-title-->
				<div class="main-content-nd">
					Ngày Đăng:28 -09 -2017
				</div><!--main-content-nd-->

			</div><!--main-content-->
			<div class="main-content">
				<div classs="main-content-title">
					<a href="#">Thông báo v/v kiểm tra trình độ Tiếng Anh khóa tuyển sinh năm 2017 </a>
				</div><!--main-conent-title-->
				<div class="main-content-nd">
					Ngày Đăng:28 -09 -2017
				</div><!--main-content-nd-->

			</div><!--main-content-->
			<div class="main-content">
				<div classs="main-content-title">
					<a href="#">Thông báo v/v kiểm tra trình độ Tiếng Anh khóa tuyển sinh năm 2017 </a>
				</div><!--main-conent-title-->
				<div class="main-content-nd">
					Ngày Đăng:28 -09 -2017
				</div><!--main-content-nd-->

			</div><!--main-content-->
			<div class="main-content">
				<div classs="main-content-title">
					<a href="#">Thông báo v/v kiểm tra trình độ Tiếng Anh khóa tuyển sinh năm 2017 </a>
				</div><!--main-conent-title-->
				<div class="main-content-nd">
					Ngày Đăng:28 -09 -2017
				</div><!--main-content-nd-->

			</div><!--main-content-->
			<div class="main-next">
					<a href="#">Xem Thêm</a>
			</div><!--main-next-->
	</div><!--tin0tuc-->

	<div id="bottom">
			<p>Copyright &copy; 2017 ĐH KT - KT CN</p>
			<p>Địa Chỉ: Ha4-204- 454 Minh Khai - Hn</p>
			<p>Version: Alpha 0.0.01</p>

	</div><!--bottom-->
</body>
</html>