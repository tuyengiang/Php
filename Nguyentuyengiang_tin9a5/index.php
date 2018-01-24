<?php 
	require_once('inc/lib.php');

	if(isset($_POST["delete"])){
				$id=$_POST["delete"];
				$sql="DELETE FROM t_sach WHERE id='{$id}'";
				$query=mysqli_query($conn,$sql);
				if($query){
					echo "<script type='text/javascript'>";
					echo "alert('Xóa sách thành công');";
					echo "</script>";
				}else{
					echo "<script type='text/javascript'>";
					echo "alert('Xóa không thành công');";
					echo "</script>";
				}
			}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/awesome/css/font-awesome.min.css" type="text/css">

</head>
<body>
	<h1>Danh sách các cuốn sách</h1>
	<div class="insert">
		<a style="float:right; margin-right:15px" href="create-sach.php">Thêm sách mới</a>
	</div>
	<table>
		<thead>
			<th>STT</th>
			<th>MÃ SÁCH</th>
			<th>TÊN SÁCH</th>
			<th>TÁC GIẢ</th>
			<th>SỐ TRANG</th>
			<th>NĂM XUẤT BẢN</th>
			<th>NHÀ XUẤT BẢN</th>
			<th>DANH MỤC</th>
			<th>TUỲ CHỌN</th>
		</thead>

		<tbody>
			<?php 
				$sql="SELECT t_sach.*,t_danhmuc.id as cid,t_danhmuc.tendm FROM t_sach,t_danhmuc WHERE t_sach.madm=t_danhmuc.id";
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
			 ?>
				<tr>
					<td style="text-align:center;"><?php echo $row['id']; ?></td>
					<td style="text-align:center;"><?php echo $row['masach']; ?></td>
					<td><?php echo $row['tensach']; ?></td>
					<td style="text-align:center;"><?php echo $row['tacgia']; ?></td>
					<td style="text-align:center;"><?php echo $row['sotrang']; ?></td>
					<td style="text-align:center;"><?php echo $row['namxb']; ?></td>
					<td style="text-align:center;"><?php echo $row['nxb']; ?></td>
					<td style="text-align:center;"><?php echo $row['tendm']; ?></td>
					<td>
						<a href="edit-sach.php?id=<?php echo $row['id']; ?>"><button type="submit" class="btn" >Edit</button></a>
						<form method="post" class="form">
							<input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
							<button class="btn" type="submit" onclick="return confirm('Bạn có muốn xóa cuốn sách này không?');">Delete</button>
						</form>

				</tr>

			<?php  endwhile; ?>

		</tbody>

	</table>
	<h1 style="margin-top:10px;">Copyright Tuyển Giảng &copy; - Tin9a5 - Msv: 15103100482</h1>
</body>
</html>