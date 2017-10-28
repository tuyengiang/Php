<?php
		require_once("ThanhVien.php");
		$thanhvien=new ThanhVien();
		$thanhvien->setconnection("localhost","root","","query_test");
		
		if($_SERVER["REQUEST_METHOD"]=="POST"){
					if($_POST["action"]=="insert"){
						$messenger="";
						$name=$_POST["name"];
						$info=$_POST["info"];
						$malop=$_POST["malop"];

						$sv=new ThanhVien(false,$name,$info,$malop);
						$rs=$thanhvien->create($sv);
						if($rs){
							$messenger="Thêm Thanh Công";
						}else{
							$messenger="Thêm Thát Bại Thanh Công";
						}
					}
					if($_POST["action"]=="search"){
						$name=$_POST["name"];
						$sv=new ThanhVien($thanhvien->name);
						$rs=$thanhvien->findByid($sv);
						if(empty($rs)){
							$messenger="Không Tìm Thấy kết quả là ".$name;
						}
					}
		}


?>

<div id="messenger">
		<?php
			if(!empty($messenger)){
				echo $messenger;
			}


		?>

</div>
<form method="post">
		<label><h4>Tên</h4>
			<input type="text" name="name">

		</label>
		<label><h4>info</h4>
			<input type="text" name="info">

		</label>
		<label><h4>ma lop</h4>
			<input type="number" name="malop">

		</label>
		
		<button type="submit">Thêm</button>
		<input type="hidden" name="action" value="insert">
</form>
<form method="post">
	<label><h4>Tên</h4>
			<input type="text" name="name">

	</label>
	<button type="submit">Thêm</button>
	<input type="hidden" name="action" value="search">

</form>


<?php
	if(!empty($rs)){
		foreach ($thanhvien as $sv) {
			echo "id: ".$sv->id." | Tên: ".$sv->name." | Info: ".$sv->info;
		}
	}

?>