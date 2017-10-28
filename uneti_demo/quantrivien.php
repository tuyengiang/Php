<!DOCTYPE html>
<html>
<head>
	<title>Uneti.Ga - Trang Quản Trị Viên
	</title>
	<meta charset="utf-8">
	<meta name="author" content="Nguyễn Tuyển Giảng">
	<meta name="description" content="Ứng Dụng Web Tra Cứu Thông Tin Sinh Viên Uneti Nhanh Nhất">
	<meta name="keyword" content="tra cứu thông tin,tra cuu diem uneti,tra cuu lich hoc">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/style.quantri.css" type="text/css">
	<link rel="stylesheet" href="css/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="js/slick/slick-tap/slick.css">
	<link rel="stylesheet" type="text/css" href="js/slick/slick-tap/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="js/jquery.bxslider.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/title.gif">
	<link rel="icon" href="img/title.gif" type="image/x-icon"/>

	<script src="js/jquery.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/slick/slick-tap/slick.min.js"></script>
	<script src="js/wow/dist/wow.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
			new WOW().init();
	</script>
</head>
	
<body>
	<?php require_once("temp/header.php"); ?>
	<div id="index-main">
			<div class="main-left">
				<div class="main-title">Quản Trị Viên</div>
				<ul>
					<li><a href="create-posts.php">Thêm Bài Viết</a></li>
					<li><a href="create-category.php">Chuyên Mục <i class="fa fa-angle-right"></i></a>
						<ul class="menu-con">
							<li><a href="create-category.php">Thêm Danh Mục</a></li>
							<li><a href="create-category-small.php">Thêm Chuyên Mục</a></li>
							<li><a href="list-category.php">Danh Sách Danh Mục</a></li>
						</ul>
					</li>
					<li><a href="list-posts.php">Danh Sách Bài Viết</a></li>
					<li><a href="list-login.php">Danh Sách thành Viên</a></li>
					<li><a href="upload.php">Upload File</a>
				</ul>
				<div class="main-left-icon">
					<ul>
						<li><a href="edit-login.php"><i class="fa fa-edit"></i></a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out"></i></a></li>
					</ul>

				</div>
			</div><!--main-left-->
			<div class="main-right">


			</div><!--main-right-->

	</div><!--main-->

	<?php require_once("temp/bottom.php");?>

</body>
</html>