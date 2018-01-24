<?php 
	require_once("inc/lib.php");
	$id=$_GET["id"];
	$sql="SELECT * FROM t_sach WHERE id='{$id}'";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
	if(!isset($row)){
		echo "<script language='javascript'>";
		echo "alert('Bài viết không tồn tại');";
		echo "</script>";
	}else{
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$masach=$_POST["masach"];
			$tensach=$_POST["tensach"];
			$tacgia=$_POST["tacgia"];
			$sotrang=$_POST["sotrang"];
			$namxb=$_POST["namxb"];
			$nxb=$_POST["nxb"];
			$danhmuc=$_POST["madm"];


			$sql="UPDATE t_sach SET masach='{$masach}',tensach='{$tensach}',tacgia='{$tacgia}',sotrang='{$sotrang}',namxb='{$namxb}',nxb='{$nxb}',madm='{$danhmuc}' WHERE id='{$id}'";
			$query=mysqli_query($conn,$sql);
			if($query){
				echo "<script language='javascript'>";
				echo "alert('Sửa sách thành công');";
				echo "</script>";
			}else{
				echo "<script language='javascript'>";
				echo "alert('Sửa sách không thành công');";
				echo "</script>";
			}
		}
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang sửa sách</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<h1>Sửa thông tin sách: <?php echo $row['tensach']; ?></h1>
	<div class="insert">
		<a style="float:right; margin-right:15px" href="index.php">Về trang chủ</a>
	</div>
	<form method="post">
		<label><h4>Mã sách</h4>
			<input type="text" name="masach" value="<?php echo $row['masach'];?>">
		</label>
		<label><h4>Tên sách</h4>
			<input type="text" name="tensach" value="<?php echo $row['tensach'];?>">
		</label>
		<label><h4>Tác giả</h4>
			<input type="text" name="tacgia" value="<?php echo $row['tacgia'];?>">
		</label>
		<label><h4>Số trang</h4>
			<input type="number" name="sotrang" value="<?php echo $row['sotrang'];?>">
		</label>
		<label><h4>Năm xuất bản</h4>
			<input type="number" name="namxb" value="<?php echo $row['namxb'];?>">
		</label>
		<label><h4>Nhà xuất bản</h4>
			<input type="text" name="nxb" value="<?php echo $row['nxb'];?>">
		</label>
		<label><h4>Danh mục sách</h4>
			<select name="madm">
				<option>--- Chọn danh mục ---</option>
				<?php 
					$sql="SELECT * FROM t_danhmuc";
					$query=mysqli_query($conn,$sql);
					while($row1=mysqli_fetch_array($query,MYSQLI_ASSOC)):
				 ?>
				 	<option <?php if($row['madm']== $row1['id']){echo 'selected';}?> value="<?php echo $row1['id'];?>"><?php echo $row1['tendm']; ?></option>
				 <?php 
				 	endwhile;
				  ?>
			</select>
		</label>
		<div style="clear:left;"></div>

		<center><button type="submit">Sửa sách</button></center>
	</form>
	<h1>Copyright Tuyển Giảng &copy; - Tin9a5 - Msv: 15103100482</h1>
</body>
</html>