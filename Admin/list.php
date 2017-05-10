
<?php require_once("templace/head_ad.php"); ?>
<?php require_once("tem/menu.php"); ?>
<div id="post">
   <?php
      $id = $_GET["id"];
      $sql="SELECT * FROM category WHERE id = {$id}";
      $rs=mysqli_query($menu,$sql);
      while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)) {
   ?>
    	<div id="list"><?php echo $row["name"]; ?></div>
   <?php } ?>

   <?php
        require_once( "inc/lip.php" );
        $query = "SELECT posts.id,posts.excerpt,posts.content,posts.user_id,posts.create_date,posts.title,category.id AS cid,category.name FROM posts,category WHERE posts.cat_id=category.id";

        $rs1 = mysqli_query( $conn , $query );

        while( $row2= mysqli_fetch_array( $rs1 , MYSQLI_ASSOC ) ){
      ?>

           <div id="content-new">
              <div class="content-img">
                 <img src="img/anh.jpg">
                 <div id="text"><?php echo $row2["name"]; ?></div>
              </div><!--content-img-->

              
                  <div class="content-title"><a href="single.php?id=<?php echo $row2["id"] ?>"> <h1><?php echo $row["title"]; ?></h1></a></div>
                <div class="content-excerpt">
                  <b>Update: </b><?php echo $row2["create_date"]; ?>
                </div>
          </div><!--content-new-->
      <?php }?>
      </div>
</div><!--list-add-->

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
             </div>    
      </div><!--main-right-->
     	
 
   
<?php require_once("tem/bottom.php"); ?>
