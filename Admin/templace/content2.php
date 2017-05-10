<div id="post">
     <div id="list">Bài Viết</div>
 	 	<h1>Chỉnh sửa bài viết : <?php echo $rs1["title"] ?></h1>
 	

<form action="" method="post" accept-charset="utf-8">
	<labe> <h4>Tiêu đề </h4>
		<input type="text" name="title" value="<?php echo $rs1["title"] ?>" id="title">
	</labe>

	<label>
		<h4>Tóm tắt</h4>
		<textarea name="excerpt"><?php echo $rs1["excerpt"];?></textarea>
	</label>

	<label>
		<h4>Nội dung</h4>
		<textarea name="content"><?php echo $rs1["content"];?></textarea>
	</label>
	<label>
             	<h4>Thể Loại</h4>
                  
	             	<select name="category">
	             	<option>Chọn Danh Mục</option>
	             	<?php
	             	   $sql="SELECT * FROM category";
	             	   $rs2=mysqli_query($menu,$sql);
	             	   while($rw=mysqli_fetch_array($rs2,MYSQLI_ASSOC)){
             	   ?>
	             	  <option <?php if($rw["id"]==$rs1["cat_id"]){echo "selected";}; ?>

	             	    value="<?php echo $rw["id"]; ?>"><?php echo $rw["name"]; ?></option>
	             	 <?php } ?>
	             	</select>
	             
            </label>

	<center>
     <button type="submit" id="buttom-new">
					<a href="index.php">Về Home</a>
	</button>

	<button type="submit" id="buttom-new">Cập nhật</button></center>
</form>



 </div><!--edit-->
 <div id="main-right">
                 <div id="list1">Đăng Nhập</div>
                 <div id="login">
                      <form action=" " method="post">
                        <lable><h2>Tên Đăng Nhập</h2>
                          <input type="text" placeholder="Nhập Tên Đăng Nhập" name="user">
                          </lable>
                          <lable><h2>Password</h2>
                            <input type="password" placeholder="Nhập Password" name="password">
                          </lable>
                          <center>
                              <button type="submit"><a href="dangky.php">Đăng Ký</a></button>
                              <button type="submit">Đăng Nhập</button>
                          </center>
                      </form>
                 </div><!--login-->
        <div style="clear:left">
             </div>    
      </div><!--main-right-->