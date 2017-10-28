<!DOCTYPE html>
<html>
<head>
	<title>Trang Đăng Ký</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="js/jquery.bxslider.css">
	<script src="js/jquery.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/wow/dist/wow.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript">
			new WOW().init();
	</script>
</head>
<?php require_once("templace/head.php"); ?>
<?php require_once("templace/menu.php");?>
	<div id="index-main" class="wow bounceInUp">
		
			<div id="main-title" style="width:50%;margin:auto;">Đăng Ký</div>
			<form method="post" style="width:50%;margin:auto;">
				<label><h4><i class="fa fa-user"></i> Tên Đăng Nhập</h4>
					<input type="text" name="user" placeholder="Nhập tên đăng nhập">

				</label>
				<label><h4><i class="fa fa-code"></i> Password</h4>
					<input type="password" name="password" placeholder="Nhập Password">
				</label>
				<label><h4><i class="fa fa-envelope"></i> email</h4>
					<input type="email" name="email" placeholder="Nhập Email">
				</label>
				<label><h4><i class="fa fa-calendar"></i> Ngày Sinh</h4>
							<select name="ngay" id="select">
								<option>Ngày</option>
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option value='{$i}'>".$i."</option>";
									}

								?>
							</select>
							<select name="thang" id="select">
								<option>Tháng</option>
								<?php
									for($i=1;$i<=12;$i++){
										echo "<option value='{$i}'>".$i."</option>";
									}

								?>
							</select>
							<select name="nam" id="select">
								<option>Năm</option>
								<?php
									for($i=1970;$i<=DATE('Y');$i++){
										echo "<option value='{$i}'>".$i."</option>";
									}

								?>
							</select>


						</label>
						<label><h4><i class="fa fa-mars-double"></i> Giới Tính</h4>
							<select name="femal" id="select">
								<option value="1">Nam</option>
								<option value="0">Nữ</option>
								<option value="01">Khác .....</option>
							</select>

						</label><br>
						
				<Center><button type="submit" id="btn2">Đăng Nhập</button></Center>

			</form>
	</div><!--index-main-->

<?php require_once("templace/bottom.php");?>
