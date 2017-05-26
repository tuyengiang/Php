<?php
     require_once( "inc/lip.php" );
     $id=$_GET["id"];
     $sql="SELECT * FROM posts WHERE id={$id}";
     $query=mysqli_query($conn,$sql);

     $rs1=mysqli_fetch_array($query, MYSQLI_ASSOC);
?>
<?php require_once("templace/head_ad.php");?> <!-- head cua home-->
<?php require_once("tem/menu.php");?> <!-- header-->

		  <div id="post">
		      <div id="list">Xin mời bạn xem </div>
		          <div id="nd">
		          		<h1><?php echo $rs1["title"]; ?></h1>
		               <?php echo $rs1["content"]; ?>
		          	
		          </div>
		          
		  </div><!--content-->

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

  
    
<?php require_once("tem/bottom.php");?> <!--bottom-->  
</body>
</html>