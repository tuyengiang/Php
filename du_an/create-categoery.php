<?php require_once("inc/lib.php"); 
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$title=$_POST["title"];
			$content=$_POST["content"];

			$sql="INSERT INTO category(title,content)
					VALUES('{$title}','{$content}')
			";
			$query=mysqli_query($conn,$sql);
			if($query){
				echo "<script type='text/javascript'>";
				echo "alert('Tạo Thành Công')";
				echo "</script>";
			}else{
				echo "<script type='text/javascript'>";
				echo "alert('Tạo Không Thành Công')";
				echo "</script>";
			}
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tạo Chuyên Mục</title>
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
				<div id="list"><i i class="fa fa-plus"></i> Tạo Chuyên Mục</div>

				<form method="post">
					<label><h3><i class="fa fa-pencil"></i> Tên Chuyên Mục</h3>
						<input type="text" placeholder="Nhập Tên Bài Viết" name="title">
					</label>
					
					<label><h3><i class="fa fa-pencil"></i> Nội Dung</h3>
						<textarea name="content"></textarea>
					</label>
					<br><br><br>
					<center><button type="submit">Tạo Chuyên Mục</button></center>

				</form>

			</div><!--main-left-->

			<div id="main-right">
				<div id="list"><i i class="fa fa-thumbs-o-up"></i> Like Facebook</div>
			</div><!--main-right-->

		</div><!--main-content-->

<?php require_once("templace/bottom.php"); ?>