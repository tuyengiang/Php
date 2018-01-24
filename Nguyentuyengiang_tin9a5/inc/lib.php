<?php 
		$conn=mysqli_connect("localhost","root","","ql_sach");
		if($conn){
			mysqli_set_charset($conn,"utf8");
		}else{
			die("Không kết nối được csdl").mysqli_error($conn);
		}

?>