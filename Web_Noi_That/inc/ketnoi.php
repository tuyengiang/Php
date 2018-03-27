<?php
	session_start();
	$conn=mysqli_connect('localhost','root','root','blog_demo1');
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die('Khong the ket noi csdl').mysqli_error($conn);
	}
		
	
?>