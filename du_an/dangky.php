<!DOCTYPE html>
<html>
<head>
	<title>Trang Đăng Ký</title>
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
					<div id="list"><i i class="fa fa-user-plus"></i> Đăng Ký</div>
					<form method="post" id="form">
						<label><h3><i class="fa fa-user"></i> User</h3>
								<input type="text" placeholder="Nhập Tên User" name="user">
						</label>
						<label><h3><i class="fa fa-code"></i> Nhập Password</h3>
								<input type="password" placeholder="Nhập Password" name="password">
						</label>
						<label><h3><i class="fa fa-code"></i> Nhập Lại Password</h3>
								<input type="password" placeholder="Nhập Lại Password" name="password">
						</label>
						<label><h3><i class="fa fa-envelope"></i> Nhập Email</h3>
								<input type="email" placeholder="Nhập Email" name="email">
						</label>
						<label><h3><i class="fa fa-calendar"></i> Ngày Sinh</h3>
							<select name="ngay">
								<option>Ngày</option>
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option value='{$i}'>".$i."</option>";
									}

								?>
							</select>
							<select name="thang">
								<option>Tháng</option>
								<?php
									for($i=1;$i<=12;$i++){
										echo "<option value='{$i}'>".$i."</option>";
									}

								?>
							</select>
							<select name="nam">
								<option>Năm</option>
								<?php
									for($i=1970;$i<=DATE('Y');$i++){
										echo "<option value='{$i}'>".$i."</option>";
									}

								?>
							</select>


						</label>
						<label><h3><i class="fa fa-mars-double"></i> Giới Tính</h3>
							<select name="femal">
								<option value="1">Nam</option>
								<option value="0">Nữ</option>
								<option value="01">Khác .....</option>
							</select>

						</label>
						<label>
							<center><button type="submit">Đăng Ký</button></center>
						</label>

					</form>
				</div><!--main-lleft-->
				<div id="main-right">
					<div id="list"><i i class="fa fa-thumbs-o-up"></i> Like Facebook</div>

					


				</div><!--main-right-->



		</div><!--main-->
	<?php require_once("templace/bottom.php");?>