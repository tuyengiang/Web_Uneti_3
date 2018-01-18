<?php 
	// ket noi csdl
	$conn=mysqli_connect("localhost","root","root","blog_demo1");
	/*
		mysqli_connect(); day ham ket noi csdl
		mysqli_error(ten bien ket noi); // hien thi loi gan nhat
	*/
	if($conn){
		mysqli_set_charset($conn,"utf8"); // dinh dang dl ve tieng viet
	}else{
		die("Không kết nối đưọc csdl").mysli_error($conn);// ngat ket noi voi csdl
	}


	/// thao tac voi csdl : them bai viet moi
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$title=$_POST["title"];
		$content=$_POST["content"];
		$excerpt=$_POST["excerpt"];
		$images=$_POST["image"];
		$message="";
		if(empty($title)){
			$message="Mời nhập tên bài viết";
		}
		else if(empty($content)){
			$message="Mời bạn nhập nội dung";
		}
		else if(empty($excerpt)){
			$message="Mời bạn nhập nội dung tóm tắt";
		}
		else{
$sql="INSERT INTO posts (title,images,content,excerpt,cat_id,user_id)
VALUES('{$title}','{$images}','{$content}','{$excerpt}',1,1)";
			$query=mysqli_query($conn,$sql);
			/*
				mysqli_query(ten bien ket noi, ten bien them or sua csdl ($sql)): ham truy van csdl
	
			*/

			if($query){
$message="Thêm bài viết thành công !!!<a href='../index.php'> Ve trang chu</a>";
			}else{
				$message="Thêm bài viết thất bại !!!".mysqli_error($conn);
			}
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tạo bài viết mới</title>
	<meta charset="utf-8"/>
	<style>
			*{
				margin:0; padding:0;
				font-family:roboto,arial;
			}
			body{
				background:white;
				width:50%;
				margin:auto;
				box-shadow:2px 2px 2px 2px rgba(0,0,0,0.1);
			}

			form{	
				width:80%;
				margin:auto;
				margin-top:10px;

			}
			input{
				width:100%;
				height:40px;
				line-height:40px;
				border:1px dashed green;
				margin:10px 0 0 0;
				border-radius:1em;
				padding-left:10px;
			}
			textarea{
				margin:10px 0 0 0;
				width:100%;
				height:100px;
				border:1px dashed green;
				border-radius:1em;
				padding-left:10px;

			}
			h1{
				width:100%;
				height:80px;
				line-height:80px;
				text-align:center;
				background:green;
				color:white	;
			}
			h4{
				color:green;
				margin:10px 0 10px 0;
			}
			button{
				width:20%;
				height:40px;
				margin:10px 10px 10px 0;
				background:green;
				color:white;
				border:none;
				cursor:pointer;
				font-size:15px;
				font-weight:bold;
				border-radius:1em;
				transition:0.5s ease all;
			}
			button:hover{
				transition:0.5s ease all;
				background:#ff3333;
				border-radius:1em;
			}


	</style>
</head>
<body>
	<h1>Tạo bài viết</h1>
	<?php 
			if(!empty($message)){
				echo "<h3>". $message . "</h3>";
			}
	 ?>
	<form method="post">	
		<label><h4>Tên bài viết</h4>
			<input type="text" placeholder="Full title" name="title">
		</label>
		<label><h4>Nội dung tóm tắt</h4>
			<textarea name="excerpt" placeholder="Nhập nd tóm tắt"></textarea>
		</label>
		<label><h4>Nội dung</h4>
			<textarea name="content" placeholder="Nhập nội dung"></textarea>
		</label>
		<label><h4>Hình ảnh đại diện</h4>
				<input type="file" name="image">

		</label>
		<br>
		<label>
			<button type="submit">Tạo bài viết</button>
			<button type="reset">Nhập lại</button>
		</label>

	</form>
</body>
</html>