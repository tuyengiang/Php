<?php
		require_once("inc/connect.php");

		if($_SERVER["REQUEST_METHOD"]=="POST"){
				$ten=$_POST["ten"];
				$ho=$_POST["ho"];
				$email=$_POST["email"];
				$pass=$_POST["password"];
				$ngay=$_POST["ngay"];
				$thang=$_POST["thang"];
				$nam=$_POST["nam"];
				$gender=$_POST["gender"];

				$sql="INSERT INTO login (ten,ho,email,password,ngay,thang,nam,gender)
						VALUES('{$ten}','{$ho}','{$email}','{$pass}','{$ngay}','{$thang}','{$nam}','{$gender}')";
				$query=mysqli_query($conn,$sql);
				if($query){
					echo "<script language='javascript'>";
					echo "alert('Đăng ký thành công. Mời bạn đăng nhập')";
					echo"</script>";
				}else{
					echo "<script language='javascript'>";
					echo "alert('Đăng ký thất bại')";
					echo"</script>";
				}


		}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký - Box Chát</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>
	<meta name="viewport" content="width=device-width,initail-scale=1"/>
</head>
<body>
<div id="header">
		<div id="header-btn">
			<div id="header-logo">
				
				<h3>BoxCode</h3>
			</div><!--header-logo-->
			
			<div id="header-login">
					<form method="post" >
						<label>
							<input type="text" name="user" placeholder="Nhập User" id="input">
							<input type="password" name="password" placeholder="Nhập Password" id="input">
							<button type="submit">Login</button>
						</label>

					</form>
			</div><!--header-login-->
		</div><!--header-btn-->
	</div><!--header-->
	<div id="top">
	<div id="top-right-dangky" s><div id="right">
			<h1> Đăng ký Hoàn Toàn Miễn Phí</h1>
			<h4>Bây Giờ và mãi mãi</h4>
			<form method="post" id="form">
				<label>
					<input type="text" name="ten" placeholder="Tên" id="ten">
					<input type="text" name="ho" placeholder="Họ" id="ten">
				</label>
				<label>
					<input type="text" name="email" placeholder="Nhập SĐT Hoặc Email">
				</label><br>
				<label>
					<input type="password" name="password" placeholder="Nhập Mật Khẩu Mới">
				</label><br>
				<label>Ngày Sinh<br>
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
							for($i=1970;$i<=DATE("Y");$i++){
								echo "<option value='{$i}'>".$i."</option>";
							}
						?>
					</select>
				</label><br>
				<label>
					<input type="radio" name="gender" value="0" id="gender" checked="checked">Nữ
					<input type="radio" name="gender" value="1" id="gender">Nam

				</label><br><br>
				<label>
						Bạn đã đồng ý với điều khoản của trang box chát <a href="#"> Điều Khoản</a>

				</label><br><br>
				<button type="submit" style="margin:10px 10px; width:40%;"> Đăng Ký</button>
			</form>
		</div></div><!--top-right-dangky-->

	</div><!--top-->

	<div id="bottom">
			Nhà Phát Triển : Tuyển Giảng - Thanh Tú<br>
			Địa Chỉ: Hà Nội - Việt Nam
	</div><!--bottom-->
</body>
</html>