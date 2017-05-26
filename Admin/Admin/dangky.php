<?php require_once("inc/lip.php"); 

     if($_SERVER["REQUEST_METHOD"]=="POST"){
     	$user=$_POST["user"];
     	$pass=$_POST["pass"];
     	$ten=$_POST["ten"];
     	$hoten=$_POST["hoten"];
     	$email=$_POST["email"];
     	$giotinh=$_POST["femal"];
     	$date=$_POST["brith"];

     	$sql="INSERT INTO user (ten,hoten,user,pass,email,brith,femal)
             VALUES('{$ten}','{$hoten}','{$user}','{$pass}','{$email}','{$date}','{$femal}')
     	";
     	$query=mysqli_query($conn,$sql);

     	if($query){
     		echo "<h1> Đăng ký thành công </h1>";
     	}else{
     		echo "<h1> Đăng ký thất bại </h1>";
     	}

     }


?>
<?php require_once("templace/header_login.php") ?>
<?php require_once("tem/menu.php") ?>
<div id="post">
	<div id="list1">Đăng Ký</div>
	<div id="login">
		<table>
			<form methoa="post" action="">
				<tr>
					<td><h1>Tên</h1></td>
				</tr>
				<tr>
					<td><input type="text" name="ten" placeholder="Nhập Tên" id="name">

					<input type="text" name="hoten" placeholder="Nhập Ho" id="name"></td>
				</tr>
				<tr>
					<td><h1>Nhập Username</h1></td>
				</tr>
				<tr>
					<td><input type="text" name="user" placeholder="Nhập tên tài khoản"></td>
				</tr>
				<tr>
					<td><h1>Nhập Password</h1></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Nhập Password"></td>
				</tr>
				<tr>
					<td><h1>Nhập Lại Password</h1></td>
				</tr>
				<tr>
					<td><input type="password" name="pass" placeholder="Nhập lại password"></td>
				</tr>
				<tr>
					<td><h1>Nhập Email</h1></td>
				</tr>
				<tr>
					<td><input type="text" name="email" placeholder="Nhập email@gmail.com"></td>
				</tr>
				<tr>
					<td><h1>Brithday</h1></td>
				</tr>
				<tr>
					<td>
						<select name="brith">
						   <option>Ngày</option>
							<?php
								for($i=1;$i<=31;$i++){
									echo "<option value='{$i}'>$i</option>";
								}
							?>
						</select>

						<select name="brith">
						   <option>Tháng</option>

							<?php
								for($i=1;$i<=12;$i++){
									echo "<option value='{$i}'>$i</option>";
								}
							?>
						</select>

						<select name="brith">
						   <option>Năm</option>

							<?php
								for($i=1972;$i<=date("Y");$i++){
									echo "<option value='{$i}'>$i</option>";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td><h1>Giới Tính</h1></td>
				</tr>
				<tr>
					<td>
						<select name="femal">
						   <option>Giới Tính</option>
							<option value="1">Nam</option>
							<option value="0">Nữ</option>
						</select>
					</td>
				</tr>
				<tr>
				   
				   <td><center><button type="submit">Đăng Ký</button></center></td>
				</tr>

			</form>
		</table>
	</div><!--login-->
</div><!--post-->
                

<?php require_once("tem/bottom.php"); ?>