<?php require_once("inc/lib.php"); 
	if($_SERVER["REQUEST_METHOD"]=="POST"){
			$title=$_POST["title"];
			$content=$_POST["content"];
			$excerpt=$_POST["excerpt"];
			$category=$_POST["category"];
			$view=$_POST["view"];
			$image=$_POST["image"];
			$sql="INSERT INTO posts(title,excerpt,content,cat_id,image,view)
					VALUES('{$title}','{$excerpt}','{$content}','{$category}','{$image}','{$view}')
			";
			$query=mysqli_query($conn,$sql);
			if($query){
				echo "<script type='text/javascript'>";
				echo "alert('Viết Thành Công')";
				echo "</script>";
			}else{
				echo "<script type='text/javascript'>";
				echo "alert('Viết Không Thành Công')";
				echo "</script>";
			}
			/**upload img**/
			if($_FILES['image']['size'] >( 4*1024*1024) ){
				echo " Bạn chỉ upload file < 4MB";
			}else{
				move_uploaded_file($_FILES['image']['tmp_name'],"img/posts/".$_FILES['image']['name']);
				
				echo "Upload Thành Công";
				
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tạo Bài Viết Mới</title>
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
				<div id="list"><i i class="fa fa-plus"></i> Tạo Bài Viết</div>

				<form method="post">
					<label><h3><i class="fa fa-pencil"></i> Tên Bài Viết</h3>
						<input type="text" placeholder="Nhập Tên Bài Viết" name="title">
					</label>
					<label><h3><i class="fa fa-pencil"></i> Nội Dung Tóm Tắt</h3>
						<textarea name="excerpt"></textarea>
					</label>
					<label><h3><i class="fa fa-pencil"></i> Nội Dung Bài Viết</h3>
						<textarea name="content"></textarea>
					</label>
					<label><h3><i class="fa fa-folder"></i> Chuyên Mục</h3>
						<select name="category">
							<option id="option">- - - CHUYÊN MỤC BÀI VIẾT - - -</option>
							<?php
								$sql="SELECT category_posts.id,category_posts.title,category_posts.content,category_posts.cat_id,category.id as cid,category.title as ctitle,category_smal.id as sid,category_smal.title stitle,category_smal.cat_id as scatid
								FROM category_smal,category,category_posts WHERE category_smal.cat_id=category.id AND category_posts.cat_id=category_smal.id ";

								$query=mysqli_query($conn,$sql);
								while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
							?>
							<option value="<?php echo $row['id'];?>"><?php echo $row['title'];?> | <?php echo $row['stitle']; ?></option>
						<?php endwhile;?>
						</select>
					</label>
					<label><h3><i class="fa fa-folder"></i> Chọn Mục Muốn Hiển Thị</h3>
							<select name="view">
								<option id="option"> - - -CHỌN CHUYÊN MỤC- - - </option>
								<?php
									$sql="SELECT * FROM category";
									$query=mysqli_query($conn,$sql);
									while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
								?>
								<option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
							<?php endwhile;?>

							</select>
					</label>
					<label><h3><i class="fa fa-picture-o"></i> Hình Ảnh</h3>
						<input type="file" name="image">
					</label><br><br><br>
					<center><button type="submit">Viết Bài</button></center>

				</form>

			</div><!--main-left-->

			<div id="main-right">
				<div id="list"><i i class="fa fa-thumbs-o-up"></i> Like Facebook</div>
			</div><!--main-right-->

		</div><!--main-content-->

<?php require_once("templace/bottom.php"); ?>