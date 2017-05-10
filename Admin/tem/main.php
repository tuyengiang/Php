<div id="content">
          <div id="list">Tin Tức Mới</div>

          <?php 
               require_once("inc/lip.php");
               $sql="SELECT posts.id,posts.excerpt,posts.content,posts.user_id,posts.create_date,posts.title,category.id AS cid,category.name FROM posts,category WHERE posts.cat_id=category.id";

               $query=mysqli_query($conn,$sql);
               while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
          ?>
          <div id="content-new">
              <div class="content-img">
                 <img src="img/anh.jpg">
                 <div id="text"><?php echo $row["name"]; ?></div>
              </div><!--content-img-->

              
                  <div class="content-title"><a href="single.php?id=<?php echo $row["id"] ?>"> <h1><?php echo $row["title"]; ?></h1></a></div>
                <div class="content-excerpt">
                  <b>Update: </b><?php echo $row["create_date"]; ?>
                </div>
          </div><!--content-new-->
        <?php } ?>
  <div style="clear:left">

  </div><!--content-->
  <div style="clear:left">

</div><!--main-left-->
</div><!--main-->
