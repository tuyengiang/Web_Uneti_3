<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$chieudai=$_POST["a"];
		$chieurong=$_POST["b"];
		$dientich=0;$chuvi=0;
		
		$dientich=$chieudai * $chieurong;
		$chuvi=($chieudai + $chieurong)*2;
		
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
		<h1>Hình chữ nhật</h1>
			<div class="center">
				<label><h4>Nhập chiều dài</h4>
						<input type="number" placeholder="Nhập chiều dài" name="a">
				</label>
				<label><h4>Nhập chiều rộng</h4>
						<input type="number" placeholder="Nhập chiều rộng" name="b">
				</label>
				<label><h4>Chu vi</h4>
						<input type="number" style="background:lightgray;color:blue;font-weight:bold;" 	value="<?php echo $chuvi;?>">
				</label>
				<label><h4>Diện tích</h4>
						<input type="number" style="background:lightgray;color:blue;font-weight:bold;" value="<?php echo $dientich; ?>
						 ">
				</label>
				<center>
					<label>
						<button type="submit">Tinh</button>
					</label>
					<label><button type="reset" style="background:red">Nhập lại</button></label>
				</center>
			</div>

	</form>

</body>
</html>