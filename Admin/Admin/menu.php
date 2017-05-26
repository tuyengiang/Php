<?php require_once("inc/categroy.php");
  if(isset($_POST["delete"])  ){
		$id = $_POST["delete"];
		$sql = "DELETE FROM category WHERE id = {$id}";
		$rs = mysqli_query( $menu , $sql );
		if( $rs ){
			echo "<h1>Xóa thành công ! </h1>";
		}else{
			echo "<h1>Xóa thất bại ! <h1>";
		}
	}
 
 ?>
<?php require_once("templace/head_ad.php"); ?>
<?php require_once("tem/menu.php"); ?>
<div id="post">
		
	<div id="list">Trang Quản Lý Của Admin</div>
	<table>
          <caption>Quản Lý Danh Mục</caption>
          <thead>
          	  <th>Id</th>
          	  <th>Tên Thư Mục</th>
          	  <th>Giới Thiệu</th>
          	  <th>Tùy Chọn</th>
          </thead>
          <tbody>
            <?php $query="SELECT * FROM category";
                  $sql=mysqli_query($menu,$query);
                  while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
             ?>
             <tr>
             	<td><?php echo $row["id"]; ?></td>
             	<td><?php echo $row["name"]; ?></td>
             	<td><?php echo $row["de"]; ?></td>
             	<td>
             		<a href="edit-menu.php?id=<?php echo $row['id']; ?>"><button type="submit" id="buttom-index">Edit</button></a>
					<form method="post">
						<input type="hidden" name="delete" value="<?php echo $row['id'] ?>" />
						<button type="submit" onclick="return confirm('bạn chắc chắn muốn xóa ? ');" id="buttom-index">Delete</button>
				   </form>
             	</td>
             </tr>
            <?php } ?>
          </tbody>
	</table>
	<center>
	   <form>
	      <button type="submit" id="buttom-new">
					<a href="create-menu.php">Tạo Mới</a>
		  </button>
	   </form>
	 </center>
</div>

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
<?php require_once("tem/bottom.php"); ?>