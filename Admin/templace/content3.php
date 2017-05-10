
	<div id="post">
		
		<div id="list">Tạo bài viết </div>
			<form action="" method="post" >
			<label>
				<h4>Nhập tên bài viết</h4>
				<input type="text" name="title" placeholder="Nhập tiêu đề" id="title">
			</label>

			<label>
				<h4>Nhập tóm tắt</h4>
				<textarea name="excerpt" placeholder="Nhập tóm tắt ở đây"></textarea>
			</label>

			<label>
				<h4>Nhập nội dung</h4>
				<textarea name="content" placeholder="Nhập nội dung "></textarea>
			</label>
            <label>
             	<h4>Thể Loại</h4>
                  
	             	<select name="category">
	             	<option>Chọn Danh Mục</option>
	             	<?php
	             	   $sql="SELECT * FROM category";
	             	   $rs=mysqli_query($menu,$sql);
	             	   while($rw=mysqli_fetch_array($rs,MYSQLI_ASSOC)){
             	   ?>
	             	  <option value="<?php echo $rw["id"]; ?>"><?php echo $rw["name"]; ?></option>
	             	 <?php } ?>
	             	</select>
	             
            </label>

            <center> <button type="submit" id="buttom-new">
					<a href="index.php">Về trang admin</a>
			</button>
			<button type="submit" id="buttom-new">
				Viết bài mới
			</button></center>
			

		</form>
	</div><!--create-post-->
	
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