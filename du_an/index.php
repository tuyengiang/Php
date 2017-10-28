<?php require_once("inc/lib.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
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
		<div id="top">
			<div class="top-title">
					<p> Welcome các bạn đến với web truyện</p>
			</div><!--top-title-->
			<div class="top-login">
					<ul>
						<li><a href="dangnhap.php"><i class="fa fa-user"></i> Đăng Nhập</a></li>
						<li><a href="dangky.php"><i class="fa fa-user-plus"></i> Đăng Ký</a></li>

					</ul>
			</div><!--top-login-->
		</div><!--top-->

		<div id="header">
			<div class="logo">
					<img src="img/logo/logo.png">
			</div><!--logo-->
			<div class="header-menu">
					<ul>
						<li><a href="index.php" class="active"><i class="fa fa-home"></i><br>
						Trang Chủ</a></li>
						<li><a href="theloai.php"><i class="fa fa-heart"></i><br>
						Thể Loại</a></li>
						<li><a href="sapxep.php"><i class="fa fa-list"></i><br>
						Sắp Xếp</a></li>
						<li><a href="#"><i class="fa fa-phone"></i><br>Liên Hệ</a></li>
					</ul>
			</div><!--header-menu-->
		</div><!--header-->
		<div style="clear:left;"></div>
		<div id="search-hotel">
				<div class="hotel">
					<i class="fa fa-phone"></i> 0965.565.742

					|
					<i class="fa fa-envelope"></i> Nguyentuyengiangbn@gmail.com

				</div><!--hotel-->
				<div class="search">
					<form method="post">
							<input type="search" name="search" placeholder="Tìm Kiếm...">
							<button type="submit" id="button"><i class="fa fa-search"></i></button>
					</form>

				</div>

		</div><!--search-hotel-->

		<div id="slider">
				<div id="category">
					<div class="title"><i class="fa fa-navicon"></i> Danh Mục Truyện</div>
					<ul>
						<?php
							$sql="SELECT * FROM category";
							$query=mysqli_query($conn,$sql);
							while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
						?>
						<li><a href="ldanhsach-posts.php?id=<?php echo $row['id']; ?>"><i class="fa fa-arrow-circle-right"></i> <?php echo $row['title']; ?></a></li>
						<?php endwhile;?>
					</ul>

				</div><!--category-->

				<div id="sliderbar">
					<ul class="bixslider">
						<li><a href="#"><img src="img/yeuthanky.jpg"></a></li>
						<li><a href="#"><img src="img/2.jpg"></a></li>
						<li><a href="#"><img src="img/3.JPG"></a></li>
					</ul>

				</div><!--sliderbar-->

		</div><!--slider-->
		<div style="clear:left;"></div>
		<div id="main-hot">
			<div id="title" style="color:white;"><i class="fa fa-hand-o-right"></i> Truyện Hót Trong Tuần <i class="fa fa-hand-o-left"></i></div>
			<br><br><br>
			<div id="main">
				<div class="main-content">
					<div class="main-content-img">
						<img src="img/002.png">
					</div><!--main-content-img-->
					<div class="main-content-title">
						<h4><a href="#">Tuyện 1</a></h4>
					</div><!--mian-content-title-->

				</div><!--main-content-->
				<div class="main-content">
					<div class="main-content-img">
						<img src="img/002.png">
					</div><!--main-content-img-->
					<div class="main-content-title">
						<h4><a href="#">Tuyện 1</a></h4>
					</div><!--mian-content-title-->

				</div><!--main-content-->
				<div class="main-content">
					<div class="main-content-img">
						<img src="img/002.png">
					</div><!--main-content-img-->
					<div class="main-content-title">
						<h4><a href="#">Tuyện 1</a></h4>
					</div><!--mian-content-title-->

				</div><!--main-content-->
				<div class="main-content">
					<div class="main-content-img">
						<img src="img/002.png">
					</div><!--main-content-img-->
					<div class="main-content-title">
						<h4><a href="#">Tuyện 1</a></h4>
					</div><!--mian-content-title-->

				</div><!--main-content-->
				<div class="main-content">
					<div class="main-content-img">
						<img src="img/002.png">
					</div><!--main-content-img-->
					<div class="main-content-title">
						<h4><a href="#">Tuyện 1</a></h4>
					</div><!--mian-content-title-->

				</div><!--main-content-->
				<div class="main-content">
					<div class="main-content-img">
						<img src="img/002.png">
					</div><!--main-content-img-->
					<div class="main-content-title">
						<h4><a href="#">Tuyện 1</a></h4>
					</div><!--mian-content-title-->

				</div><!--main-content-->
			</div><!--main-->

		</div><!--main-hot-->
		<div id="excerpt">
				<div id="title"><i class="fa fa-hand-o-right"></i> Truyện Cập Nhật <i class="fa fa-hand-o-left"></i></div>

				<div class="excerpt-content">
					<div class="excerpt-img">
							<img src="img/002.png">
					</div><!---excerpt-content-->
					<div class="excerpt-title">
							<a href="#"> Truyện 1</a>
					</div><!--excerpt-title-->
					<div class="excerpt-date">
						ncugfyeuygieyf
					</div><!--excerpt-date-->
				</div><!--excerpt-content-->
				<div class="excerpt-content">
					<div class="excerpt-img">
							<img src="img/002.png">
					</div><!---excerpt-content-->
					<div class="excerpt-title">
							<a href="#"> Truyện 1</a>
					</div><!--excerpt-title-->
					<div class="excerpt-date">
						ncugfyeuygieyf
					</div><!--excerpt-date-->
				</div><!--excerpt-content-->
		</div><!--excerpt-->
		<div style="clear:left;"></div>
		<div id="bottom">
			<div id="bottom-center">
				<div class="bottom-content">
					<div id="bottom-title">Facebook</div>


				</div><!--facebook-->

				<div class="bottom-content">
					<div id="bottom-title">Tài Khoản</div>
					<div class="nd">
						<h5><a href="dangnhap.php">Đăng Nhập</a></h5>
						<h5><a href="dangky.php">Đăng Ký</a></h5>
					</div>
				</div><!--login-->

				<div class="bottom-content">
					<div id="bottom-title">Địa Chỉ</div>
					<h5><font color="#F8500"><i class="fa fa-map-marker"></i></font>   Địa Chỉ : Tri Phương - Tiên Du - Bắc Ninh</h5>
					<h5><font color="#F8500"><i class="fa fa-phone"></i></font>  Phone : Tri Phương - Tiên Du - Bắc Ninh</h5></h5>	
					<h5><font color="#F8500"><i class="fa fa-envelope"></i></font>  Email: Nguyentuyengiangbn@gmail.com</h5></h5></h5>
				</div><!--map-->


				</div><!--bottom-center-->

		</div><!--bottom-->
		<div style="clear:left;"></div>
		<div id="not-bottom">
			<p style="float:left;">&copy; Bản Quyền Thuộc Về <a href="#"><font color="#0098db"> Tuyển Giảng &trade;</font></a> | Phiên Bản Beta 0.0.1 </p>

			<div class="not-bottom-icon">
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
				</ul>

			</div>
		</div><!--not-bottom-->

	</div><!---website-->
	<div id="updown">
			<div class="updown-header">
					<a href="#top"><i class="fa fa-arrow-up"></i></a>

			</div>

	</div><!--updown-->
</body>
</html>