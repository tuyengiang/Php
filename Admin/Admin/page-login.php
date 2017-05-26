<?php require_once("templace/head_ad.php");?>

<?php require_once("tem/menu.php"); ?>
<div id="post">
	<div id="list1">Danh sách User</div>
	<form action="" method="post">
	<table>
		<thead>
			<th>ID</th>
			<th>TÊN HIỂN THỊ</th>
			<th>HỌ</th>
			<th>TÊN USER</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>DATE</th>
			<th>FEMAL</th>
		</thead>
		<tbody>
			<?php
			  require_once("inc/lip.php");
				$sql="SELECT * FROM user";
				$rs=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			?>
			<tr>
				<td><?php echo $row["id"];?></td>
				<td><?php echo $row["ten"];?></td>
				<td><?php echo $row["hoten"];?></td>
				<td><?php echo $row["user"];?></td>
				<td><?php echo $row["pass"];?></td>
				<td><?php echo $row["email"];?></td>
				<td><?php echo $row["date"];?></td>
				<td><?php if($row["femal"]==1){
						echo "Nam";
					}else{
						echo "Nữ";
					}
				?>
					</td>
			</tr>
		<?php }?>
		</tbody>
	</table>
	</form>
</div><!--post-->

<?php require_once("tem/bottom.php"); ?>