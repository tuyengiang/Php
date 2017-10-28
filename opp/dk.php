<?php  
	require_once("ThanhVien.php");

	$thanhvien=new ThanhVien();
	$thanhvien->setconnection("localhost","root","","query_test");

	$filter=array(
			'name' =>isset($_POST['name']) ? mysqli_escape_string($_POST['name']) :false,
			'info' =>isset($_POST['info']) ? mysqli_escape_string($_POST['info']) :false,
			'ma_lop' =>isset($_POST['malop']) ? mysqli_escape_string($_POST['malop']) :false
	);

	$where=array();


	if($filter["name"]){
		$where[]="name='{$filter['name']}'";
	}
	if($filter['info']){
		$where[]="info='{$filter['info']}'";
	}
	if($filter['ma_lop']){
		$where[]="ma_lop='{$filter['malop']}'";
	}

	$sql="SELECT * FROM thanhvien";
	if($where){
		$sql.='WHERE '.implode('AND',$where);
	}

