<?php 
	// ket noi csdl
	$conn=mysqli_connect("localhost","root","root","blog_demo1");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die("Khong ket noi duoc csdl").mysqli_error($conn);
	}
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ blog</title>
	<meta charset="utf-8"/>
	<style>
		td img{
			width:100%;
			height:100px;
		}
	</style>
</head>
<body>
	<h1> Day la blog dau tay</h1>
	<a href="admin/create-posts.php"> Tạo bài viết mới</a>
	<table>
		<thead>
			<th>ID</th>
			<th>TÊN BÀI VÍÊT</th>
			<th>HINH ANH</th>
			<th>NÔỊ DUNG</th>
			<th>NOI DUNG TÓM TĂT</th>
			<th>NGÀY THÊM</th>
			<th>DANH MỤC</th>
			<th>NGUOI DANG</th>
			<th>TUY CHON</th>
		</thead>

		<tbody>
			<?php 
				$sql="SELECT * FROM posts";
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
					/*
						mysqli_fetch_array(): tra dl theo tung hang
						va dua cac cot trong hang thanh 1 mang
						0 
						$row[0,1,2,3,4,5,6];

						$row1[0],$row1[4]=2018-01-12 01:24:28

						$row1[0]=1;
						$row1[3]=asdfghjkl;


						$row4[6]=1

					*/

			 ?>
			<tr>
				<td><?php echo $row["id"]; ?></td>
				<td><?php echo $row["title"]; ?></td>

<td><?php echo "<img src='img/".$row["images"] . "'>" ?></td>
				<td><?php echo $row["content"]; ?></td>
				<td><?php echo $row["excerpt"]; ?></td>
				<td><?php echo $row["date_time"]; ?></td>
				<td><?php echo $row["cat_id"]; ?></td>
				<td><?php echo $row["user_id"]; ?></td>
				<td>
					<a href="#">edit</a>
					<a href="#">delete</a>
				</td>
			</tr>

			<?php } ?>
		</tbody>

	</table>

</body>
</html>