<?php 
	require_once("inc/lib.php");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$masach=$_POST["masach"];
		$tensach=$_POST["tensach"];
		$tacgia=$_POST["tacgia"];
		$sotrang=$_POST["sotrang"];
		$namxb=$_POST["namxb"];
		$nxb=$_POST["nxb"];
		$danhmuc=$_POST["madm"];
		if($masach==""){
			$message1="Bạn chưa nhập mã sách !!!";
		}
		else if($tensach==""){
			$message2="Bạn chưa nhập tên sách !!!";
		}
		else if($tacgia==""){
			$message3="Bạn chưa nhập tác giả !!!";
		}
		else if($sotrang==""){
			$message4="Bạn chưa nhập số trang !!!";
		}
		else if($namxb==""){
			$message5="Bạn chưa nhập năm xuất bản !!!";
		}
		else if($nxb==""){
			$message6="Bạn chưa nhập nhà xuất bản !!!";
		}
		else if($danhmuc==""){
			$message7="Bạn chưa chọn danh mục !!!";
		}
		else{

			$sql="INSERT INTO t_sach (masach,tensach,tacgia,sotrang,namxb,nxb,madm)
				VALUES('{$masach}','{$tensach}','{$tacgia}','{$sotrang}','{$namxb}','{$nxb}','{$danhmuc}')
			";
			$query=mysqli_query($conn,$sql);
			if($query){
				echo "<script language='javascript'>";
				echo "alert('Thêm sách thành công');";
				echo "</script>";
			}else{
				echo "<script language='javascript'>";
				echo "alert('Thêm sách không thành công');";
				echo "</script>";
			}
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Thêm cuốn sách mới</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<h1>Thêm sách mới</h1>
	<div class="insert">
		<a style="float:right; margin-right:15px" href="index.php"> Về trang chủ</a>
	</div>
	<form method="post">
		<label><h4>Mã sách</h4>
			<h3>
				<?php 

					if(!empty($message1)){
						echo $message1;
					}

				 ?>
			</h3>
			<input type="text" name="masach" placeholder="Nhập mã sách">
		</label>
		<label><h4>Tên sách</h4>
			<h3>
				<?php 

					if(!empty($message2)){
						echo $message2;
					}

				 ?>
			</h3>
			<input type="text" name="tensach" placeholder="Nhập tên sách">
		</label>
		<label><h4>Tác giả</h4>
			<h3>
				<?php 

					if(!empty($message3)){
						echo $message3;
					}

				 ?>
			</h3>
			<input type="text" name="tacgia" placeholder="Nhập tên tác giả">
		</label>
		<label><h4>Số trang</h4>
			<h3>
				<?php 

					if(!empty($message4)){
						echo $message4;
					}

				 ?>
			</h3>
			<input type="number" name="sotrang" placeholder="Nhập số trang">
		</label>
		<label><h4>Năm xuất bản</h4>
			<h3>
				<?php 

					if(!empty($message5)){
						echo $message5;
					}

				 ?>
			</h3>
			<input type="number" name="namxb" placeholder="Nhập năm xuất bản">
		</label>
		<label><h4>Nhà xuất bản</h4>
			<h3>
				<?php 

					if(!empty($message6)){
						echo $message6;
					}

				 ?>
			</h3>
			<input type="text" name="nxb" placeholder="Nhập tên nhà xuất bản">
		</label>
		<label><h4>Danh mục sách</h4>
			<h3>
				<?php 

					if(!empty($message7)){
						echo $message7;
					}

				 ?>
			</h3>
			<select name="madm">
				<option>--- Chọn danh mục ---</option>
				<?php 
					$sql="SELECT * FROM t_danhmuc";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				 	<option value="<?php echo $row['id'];?>"><?php echo $row['tendm']; ?></option>
				 <?php 
				 	endwhile;
				  ?>
			</select>
		</label>
		<div style="clear:left;"></div>
		<center><button type="submit">Thêm sách</button></center>
	</form>

	<h1>Copyright Tuyển Giảng &copy; - Tin9a5 - Msv: 15103100482</h1>

</body>
</html>