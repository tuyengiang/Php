<?php 
	session_start();
	$conn=mysqli_connect("localhost","root","root","blog-uneti");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die("Không kết nối được csdl").mysqli_error($conn);
	}
 ?>