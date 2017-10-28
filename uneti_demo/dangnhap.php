<!DOCTYPE html>
<html>
<head>
	<title>Uneti.Ga - Đăng nhập vào website
	</title>
	<meta charset="utf-8">
	<meta name="author" content="Nguyễn Tuyển Giảng">
	<meta name="description" content="Ứng Dụng Web Tra Cứu Thông Tin Sinh Viên Uneti Nhanh Nhất">
	<meta name="keyword" content="tra cứu thông tin,tra cuu diem uneti,tra cuu lich hoc">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/style.css" type="text/css">
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
			<div class="main-title">Đăng Nhập</div>
			<form method="post">
				<label><h4><i class="fa fa-user"></i> Tên Đăng Nhập</h4>
					<input type="text" name="user" placeholder="Nhập Tên Đăng Nhập" class="wow bounceInLeft">
				</label>
				<label><h4><i class="fa fa-lock"></i> Mật Khẩu</h4>
					<input type="password" name="pass" placeholder="Nhập Mật Khẩu" class="wow bounceInRight">
				</label><br>
				<label>
					<center><button type="submit" id="btn2">Đăng Nhập</button></center>
				</label>
				<label >
					<center><ul style="margin-top:20px;">
						<li><a href="dangky.php">Đăng Ký</a></li>
						<li><a href="quenmk.php">Quên Mật Khẩu ?</a></li>	
					</ul></center>
				</label>

			</form>

	</div><!--index-main-->
	<?php require_once("temp/bottom.php"); ?>
</body>
</html>