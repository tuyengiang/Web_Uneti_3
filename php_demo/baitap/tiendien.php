<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$hoten=$_POST["hoten"];
		$socu=$_POST["socu"];
		$somoi=$_POST["somoi"];
		$dongia=$_POST["dongia"];
		if($somoi>$socu){
			$thanhtien=($somoi-$socu)*$dongia;
		}else{
			echo "Chi so moi ban nhap < chi so cu";
		}
	}

?> 


<!DOCTYPE html>
<html>
<head>
	<title>Tính diện tích hình chữ nhật</title>
	<meta charset="utf-8"/>
	<style>
		*{
			margin:0; padding:0;
			font-family:roboto,arial;
		}
		form{
			width:40%;
			margin:auto;
			margin-top:20px;
			border:1px dashed green;
		}
		h1{
			width:100%;
			height:80px;
			line-height:70px;
			color:white;
			background:green;
			text-align:center;
		}
		input{
			width:93%;
			height:40px;
			border:1px solid #ddd;
			padding-left:10px;
			border-radius:0.5em;
			margin:10px 10px 10px 10px;
		}
		h4{
			margin:10px 10px 10px 10px;
			color:green;
		}
		#center{
			width:80%;
			margin:auto;
		}
		button{
			width:20%;
			height:40px;
			border:none;
			background:blue;
			color:white;
			cursor:pointer;
			font-size:15px;
			font-weight:bold;
			border-radius:1em;
			margin-bottom:10px;
		}
	</style>

</head>
<body>

	<form method="post">
		<h1>Thanh toán tiền điện</h1>
			<div class="center">
				<label><h4>Tên chủ hộ</h4>
						<input type="text" placeholder="Nhập tên chủ hộ" name="hoten">
				</label>
				<label><h4>Chỉ số cũ</h4>
						<input type="number" placeholder="Nhập chỉ số cũ" name="socu">
				</label>
				<label><h4>Chỉ số mới</h4>
						<input type="number" name="somoi">
				</label>
				<label><h4>Đơn gía</h4>
						<input type="number" name="dongia">
				</label>
				<label><h4>Số tiền thanh toán</h4>
						<input type="number" style="background:lightgray;color:blue;font-weight:bold;"
						value="<?php echo $thanhtien; ?>">
				</label>
				<center>
					<label>
						<button type="submit">tinh tien</button>
					</label>
					<label><button type="reset" style="background:red;">Nhập lại</button></label>
				</center>
			</div>

	</form>

</body>
</html>