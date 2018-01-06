<?php 
	
		// echo "<font color='#ff3333'>hello word </font>";
		// khai bao bien
		// $a="nguyen tuyen giang";
		// $b=7;
		// $c=3.5;

		// echo "Ten ban la: ".$a ."<br>";
		// echo "Tuoi ban la: ".$b ."<br>";
		// echo  "cai j do: ".$c."<br>";


		// $a=4; $b=6;
		// echo "=> Tong 2 so: ".$a." + ".$b. "= ".($a+$b)."<br>";

		$a=-1;
		if($a>0){
			echo $a . " La 1 so duong<br>";
		}
		// else{
		// 	echo $a. " La 1 so am<br>";
		// }

		// // vong for trong php
		// for($i=0;$i<10;$i++){
		// 	echo $i . " ";
		// }

		// echo "<br>";
		// // echo "<h1> Bang cuu chuong </h1><br>";
		// // for($i=2;$i<=9;$i++){
		// // 	echo "Bang so " .$i ."<br>";
		// // 	for($j=1;$j<=10;$j++){
		// 		echo $i . " * ".$j. "= ".($i*$j)."<br>";
		// 	}
		// }
		// $age=6;
		// if($age<18){
		// 	echo "Ban chua du tuoi " . "=> Tuoi cua ban la ".(18-$age)."<br>";
		// }else{
		// 	if($age>50){
		// 		echo "Ban da gia roi <br>";
		// 	}
		// 	else{
		// 		echo "Ban da du tuoi bi sich <br>";
		// 	}
		// }
		// $thang=8;
		// switch($thang){
		// 	case 1: echo "Thang " .$thang. " co 31 ngay<br>";
		// 		break;
		// 	case 2: echo "Thang " .$thang. " co 29 ngay<br>";
		// 		break;
		// 	case 3: echo "Thang " .$thang. " co 31 ngay<br>";
		// 		break;
		// 	case 4: echo "Thang " .$thang. " co 30 ngay <br>";
		// 		break;
		// 	case 5: echo "Thang " .$thang. " co 31 ngay<br>";
		// 		break;
		// 	case 6: echo "Thang " .$thang. " co 30 ngay<br>";
		// 		break;
		// 	default: echo "Thang m nhap la gi day <br>";
		// 		break;
		// }

		// if($_SERVER["REQUEST_METHOD"]=="POST"){
		// 	$age=$_POST["age"];
		// 	if($age<18){
		// 		echo "ban chua du tuoi ". "tuoi cua ban la ". (18-$age). "<br>";
		// 	}else{
		// 		if($age>50){
		// 			echo "Ban da gia roi <br>";
		// 		}else{
		// 			echo "Ban da du tuoi";	
		// 		}	
		// 	}
		// }
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$a=$_POST["age"];
			echo "Tuoi cua ban " .$a."<br>"; 

		}



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Demo</title>
 	<meta charset="utf-8"/>
 </head>
 <body>
 <h1>Kiem tra tuoi</h1>
 <form method="post">
 	<lable>
 		<input type="number" placeholder="Nhap tuoi" name="age">
 		<button type="submit">gui</button>
 	</lable>
 	<input
 </form>
 </body>
 </html>

