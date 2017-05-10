<?php 
     if( $_SERVER["REQUEST_METHOD"] == "POST" ){
 			require_once("inc/categroy.php");
      
 			$name=$_POST["name"];
 			$desc=$_POST["de"];
            $sql="INSERT INTO category (name,de)
				 VALUES('{$name}','{$desc}')";
		    $rs=mysqli_query($menu,$sql);
		    if($rs){
		    	echo "<h1>Thêm Thành Công</h1>";
		    }else{
		    	echo "<h1>Thêm Thất Bại</h1>";
		    }
      }
 ?>
<?php require_once("templace/head_ad.php"); ?>
<?php require_once("tem/menu.php"); ?>

<div id="page-create-post">
   <div id="list">Thêm Danh Mục</div>
   <form action="" method="post">
   	  <lable><h4>Nhập tên danh mục:</h4>
             <input type="text" name="name" placeholder="Nhập Tên" id="title">
   	  </lable>
   	  <lable><h4>Phần giới thiệu</h4>
             <textarea name="de" placeholder="Giới Thiệu"></textarea>
   	  </lable>
   	  <center>
            <button type="submit" id="buttom-new"><a href="menu.php">Quản Lý</button>
            <button type="submit" id="buttom-new">Tạo</button>
   	  </center>

   </form>
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