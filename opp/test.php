<?php 
	require_once("thanhvien.php");
	$thanhvien=new ThanhVien();

	$thanhvien->setconnection("localhost","root","","query_test");

	// tao 1 thanh vien

	/*$tu=new ThanhVien(false,"tu","Máy Hỏng","2");
	if($thanhvien->create($tu)){
		echo "Thêm thành công sinh viên "; $tu->name;
	}else{
		echo "Lõi thêm sinh viên "; $tu->name;
	}*/
	$thanhvienall=$thanhvien->getALL();
	/*foreach ($thanhvien as $sv){
		echo "Tên: ". $sv["name"]. "<br>";
		echo "Info: ". $sv["info"]. "<br>";
	}*/

	if($thanhvien->)

	
 ?>