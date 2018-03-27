<?php  
	require_once('inc/ketnoi.php');
	if(isset($_POST['dang-nhap'])){
		$username=$_POST["user"];
		$password=$_POST["password"];
		if($username=="" || $password==""){
			echo "<script>alert('Mời bạn nhập đầy đủ thông tin'); </script>";
		}else{
			$sql="SELECT user,password FROM dangnhap WHERE user='{$username}' AND password='{$password}'";
			$query=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
			if($row==0){
				echo "<script>alert('Tài khoản hoặc mật khẩu không đúng'); </script>";
			}else{
				$_SESSION["user"]=$user;
				header('location:admin/wp-admin.php');
			}
		}
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang Đăng Nhập</title>
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
	<div id="index-main">
		<div id="main-sign-up" class="wow bounceInLeft">
			<p style="font-size:30px;color:green;"> Bạn chưa có tài khoản ? Hãy vào đây để đăng ký</p>

			<Center><a href="dangky.php"><button type="submit" id="btn2">Đăng Ký</button></a></Center>

		</div><!--main-sign-up-->

		<div id="main-login" class="wow bounceInRight">
			<div id="main-title" style="margin-left:5px;">Đăng Nhập</div>
			<form method="post">
				<label><h4><i class="fa fa-user"></i> Tên Đăng Nhập</h4>
					<input type="text" name="user" placeholder="Nhập tên đăng nhập">

				</label>
				<label><h4><i class="fa fa-code"></i> Password</h4>
					<input type="password" name="password" placeholder="Nhập Password">
				</label><br>
				<Center><button type="submit" id="btn2" name="dang-nhap">Đăng Nhập</button></Center>

			</form>
		</div><!--main-login-->

	</div><!--index-main-->

<?php require_once("templace/bottom.php");?>
