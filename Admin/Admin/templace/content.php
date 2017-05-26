<div id="post">
		
	<div id="list">Trang Quản Lý Của Admin</div>
	
	<table>
		<caption>Danh Sách Bài Viết</caption>
		<thead>
			<tr>
				<th>STT</th>
				<th>ID</th>
				<th>TÊN BÀI VIẾT</th>
				<th>TÓM TẮT</th>
				<th>NỘI DUNG</th>
				<th>USER</th>
				<th>TEN DM</th>
				<th>DATE</th>
				<th>TÙY CHỌN</th>
			</tr>
		</thead>

		<tbody>
			<?php 
				$query = "SELECT posts.id,posts.excerpt,posts.content,posts.user_id,posts.create_date,posts.title,category.id AS cid,category.name FROM posts,category WHERE posts.cat_id=category.id";
				$rs = mysqli_query( $conn , $query );
				while( $row = mysqli_fetch_array( $rs , MYSQLI_ASSOC ) ){
			?>
			<tr>
				<td>1</td>
				<td><?php echo $row["id"];?></td>
				<td><a href="single.php?id=<?php echo $row["id"];?>"><h4><?php echo $row["title"]; ?></h4></a></td>
				<td><?php echo $row["excerpt"];?></td>
				<td><?php echo $row["content"];?></td>
				<td><?php echo $row["user_id"];?></td>
				<td><a href="edit-menu.php?id=<?php echo $row["cid"];?>"><h1><?php echo $row["name"]; ?></h1></a></td>
				<td><?php echo $row["create_date"]; ?> </td>


				<td><a href="edit-post.php?id=<?php echo $row['id']; ?>"><button type="submit">Edit</button></a>

					<form method="post">
						<input type="hidden" name="delete" value="<?php echo $row['id'] ?>" />

						<button type="submit" onclick="return confirm('bạn chắc chắn muốn xóa ? ');">Delete</button>
					</form>

				</td>
			</tr>

			<?php } ?>
		</tbody>
	</table>
	<center>
	   <form>
	      <button type="submit" id="buttom-new">
					<a href="create-post.php">Bài Viết Mới</a>
		  </button>
	   </form>
	 </center>


	</div><!--page-index-->
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