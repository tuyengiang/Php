<?php require_once("inc/lib.php");
	if(isset($_POST["delete"])){
		$id=$_POST["delete"];
		$sql="DELETE FROM posts WHERE id='{$id}'";
		$query=mysqli_query($conn,$sql);
		if($query){
			echo "<script type='text/javascript'>";
			echo "alert('Xóa Thành Công')";
			echo "</script>";
		}else{
			echo "<script type='text/javascript'>";
			echo "alert('Xóa Không Thành Công')";
			echo "</script>";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Danh Sách Bài Viết</title>
	<meta charset="utf-8"/>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/awesome/css/font-awesome.min.css"/>
	<link rel="stylesheet" type="text/css" href="js/slick/slick-tap/slick.css">
	<link rel="stylesheet" type="text/css" href="js/slick/slick-tap/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="js/jquery.bxslider.css">
	<!--script-->
	<script src="js/jquery.js"></script>
	<script src="js/slick/slick-tap/slick.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript">
		tinymce.init({
			selector:'textarea',
			menubar:true,
			height:250,
			plugins:[
				'code image'
			],
			toolbar:[
				'code image' 
			]
		});
	</script>


</head>
<body>
	<div id="website">
		<?php require_once("templace/header.php"); ?>
		<div id="main-content">
			<div id="main-left">
				<div id="list"><i i class="fa fa-user"></i> Danh Sách Bài Viết</div>
					<table>
				<thead>
					<th>ID</th>
					<th>Tên bài viết</th>
					<th>Nội Dung</th>
					<th>ND Tóm tắt</th>
					<th>Ngày Viết</th>
					<th>Chuyên Mục</th>
					<th>Image</th>
					<th>User</th>
					<th>Tùy Chọn</th>

				</thead>
				<tbody>
					<?php 
						$sql="SELECT posts.id,posts.title,posts.excerpt,posts.date,posts.content,posts.cat_id,posts.user_id,posts.image,category_posts.id as cid,category_posts.title as ctitle FROM posts,category_posts WHERE posts.cat_id=category_posts.id";

						$query=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
					?>
					<tr>
						<td><?php echo $row["id"];?></td>
						<td><?php echo $row["title"];?></td>
						<td><?php echo $row["content"];?></td>
						<td><?php echo $row["excerpt"];?></td>
						<td><?php echo $row["date"];?></td>
						<td><?php echo $row["ctitle"];?></td>
						<td><?php echo $row["image"];?></td>
						<td><?php echo $row["user_id"];?></td>
						<td><a href="edit-posts.php?id=<?php echo $row["id"];?>"><button type="submit" id="button1"><i class="fa fa-edit"></i></button></a>
						<form method="post">
							<input type="hidden" name="delete" value="<?php echo $row['id'];?>">
							<button type="submit" id="button1" onclick="return confirm (' Bạn Có Muốn Xóa Không');"><i class="fa fa-trash"></i></button>
						</form>

						</td>
					</tr>
				<?php endwhile; ?>


				</tbody>

			</table><br><br><br>
			<center><a href="create-posts.php"><button type="submit">Viết Bài</button></a></center>

			</div><!--main-left-->

			<div id="main-right">
				<div id="list"><i i class="fa fa-thumbs-o-up"></i> Like Facebook</div>
			</div><!--main-right-->

		</div><!--main-content-->

<?php require_once("templace/bottom.php"); ?>