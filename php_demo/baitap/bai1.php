<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$nd=$_POST["nd"];
			$color=$_POST["color"];
			$background=$_POST["background"];
			$size=$_POST["size"];
			$message="";
			if($nd==""){
				$message="Bạn chưa nhập nội dung";
			}
			else if($color==""){
				$message="Bạn chưa nhập màu chữ";
			}
			else if($background==""){
				$message="Bạn chưa nhập màu nền";
			}
			else if($size==""){
				$message="Bạn chưa nhập cỡ chữ";
			}

		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Bài 1</title>
	<meta charset="utf-8">
	<style>
			*{
				margin:0; padding:0;
				font-family:roboto,arial;
			}
			form{
				width:40%;
				height:400px;
				margin:auto;
				margin-top:30px;
				box-shadow:2px 2px 2px 2px rgba(0,0,0,0.1);
			}
			label{
				width:100%;
				height:50px;
				margin-top:10px;
				padding-left:20px;
			}
			h1{
				width:100%;
				height:80px;
				font-size:20px;
				color:white;
				text-align:center;
				background:#ff3333;
				line-height:80px;
			}
			input{
				width:70%;
				height:40px;
				border:1px solid #ddd;
				margin-left:10px;
				padding-left:10px;
				margin-top:10px;
			}
			button{
				width:30%;
				height:40px;
				border:none;
				line-height:40px;
				text-align:center;
				background:#ff3333;
				color:white;
				font-weight:bold;
				cursor:pointer;
				margin-top:10px;
				transition:0.3s ease all;
			}
			button:hover{
				transition:1s ease all;
				transform:translateY(-5px);
			}

	</style>
<body>
	<form method="post">
		<h1>Định dạng màu chữ - Màu nền </h1>
		<?php
			if(!empty($message)){
				echo $message;
			}
		?>
		<br>
		<label>Nội dung 
			<input type="text" name="nd" placeholder="Mời nhập nd">
		</label><br>
		<label>Màu chu
			<input type="text" name="color" placeholder="Nhập màu chữ">
		</label><br>
		<label>Màu nền
			<input type="text" name="background" placeholder="Nhập màu nền">
		</label><br>
		<label>
			cỡ chữ
			<input type="text" name="size" placeholder="Nhập kích cỡ chữ">

		</label>
		<br>
		<label>
			<center><button type="submit">Xem kết quả</button></center>
		</label>
		<label>
			<style>
				h3{
					background:<?php echo $background; ?>;
					height:40px;
					width:100%;
					line-height:40px;
					text-align:center;
					margin-top:10px;
					font-size:<?php echo $size; ?>px;
				}

			</style>
			<?php
				if(!empty($nd) && !empty($color)){
					echo "<h3><font color='".$color."'>".$nd."</font></h3>";
				}
			?>
		</label>

	</form>
</body>
</html>