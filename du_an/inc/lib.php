<?php 
		$conn=mysqli_connect("localhost","root","","web_truyen");
		if($conn){
			mysqli_set_charset($conn,"utf8");
		}else{
			die("Không Kết Nối Được Database").mysqli_error($conn);
		}

 ?>