<?php
	session_start();
	$conn=mysqli_connect("localhost","root","","box_chat");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die("Không thể kết database").mysqli_error($conn);
	}

?>