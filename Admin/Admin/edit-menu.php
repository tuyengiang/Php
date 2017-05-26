<?php
   require_once("inc/categroy.php");
   $id=$_GET["id"];
   $sql="SELECT * FROM category WHERE id='{$id}'";
   $query=mysqli_query($menu,$sql);
   $rs1=mysqli_fetch_array($query,MYSQLI_ASSOC);
   
   if(empty($rs)){
   	  echo "Danh mục không tồn tại <br>";
   }else{
   	    if($_SERVER["REQUEST_METHOD"]=="POST"){
   	    	$name=$_POST["name"];
   	    	$desc=$_POST["de"];

   	    	$sql= "UPDATE category SET name='{$name}', de='{$desc}' WHERE id='{$id}' ";
   	    	$query=mysqli_query($menu,$sql);
   	    if($query){
   	    	echo "<h1>Cập nhật thành công</h1>";
   	    }else{
   	    	echo"<h1> Cập nhật thất bại</h1>";
   	    }
   	  }
   	    
    }
?>
<?php require_once("templace/head_ad.php"); ?>
<?php require_once("tem/menu.php"); ?>
  <div id="post">
     <div id="list">Danh Mục</div>
     <h1>Chỉnh sửa: <?php echo $rs1["name"]; ?></h1>
     <form action="" method="post">
       <table>
           <lable><h4>Tên Danh Mục</h4>
                <input type="text" name="name" placeholder="Nhập tên cần sửa" value="<?php echo $rs1["name"]; ?>" id="title">
            </lable>
            <lable><h4>Giới Thiệu</h4>
                <textarea name="de" placeholder="Chỉnh sửa giới thiệu"><?php echo $rs1["de"]; ?></textarea>
             </lable>
             <center>
                  <button type="submit">
                  <a href="menu.php">Về Q Lý</a></button>
                  <button type="submit">Cập Nhật</button>
             </center>
       </table>
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
