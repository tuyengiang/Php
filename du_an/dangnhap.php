<!DOCTYPE html>
<html>
<head>
	<title>Trang Đăng Nhập</title>
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

</head>
<body>
	<div id="website">
		<?php require_once("templace/header.php");?>
		<div style="clear:left;"></div>
		<div id="main-content">
				<div id="main-left">
					<div id="list"><i i class="fa fa-user"></i> Đăng Nhập</div>
					<form method="post" id="form">
						<label><h3><i class="fa fa-user"></i> Tên Đăng Nhập</h3>
								<input type="text" placeholder="Nhập Tên User" name="user">
						</label>
						<label><h3><i class="fa fa-code"></i> Nhập Password</h3>
								<input type="password" placeholder="Nhập Password" name="password">
						</label><br>
						<label>
							<center><button type="submit">Đăng Nhập</button></center>
						</label>

					</form>
				</div><!--main-lleft-->
				<div id="main-right">
					<div id="list"><i i class="fa fa-thumbs-o-up"></i> Like Facebook</div>

					


				</div><!--main-right-->



		</div><!--main-->
	<?php require_once("templace/bottom.php");?>