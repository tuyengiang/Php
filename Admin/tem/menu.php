<div id="header">
        <div id="header-img">
          <img src="img/logo.jpg">
        </div><!--header-img-->

        <div id="search">
          <form action="" method="post">
            <input type="text" placeholder="Nhập Tin Cần Tìm" id="search-input">
            <button type="submit" id="buttom">Tìm Kiếm </button>
          </form>
        </div><!--search-->

        <div id="news">
          <center><ul id="new-1">
            <li><a href="#">Tin Vắn</a></li>
          </ul>
          <ul id="new-2">
            <li><a href="#">Tin Mới</a></li>
          </ul></center>
        </div>
    </div><!--header-->
    <div id="menu">
       <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="#">Tin Mới</a></li>
        <li><a href="#">Tin Xem Nhiều</a></li>
        <li><a href="#">Tin Công Nghệ</a></li>
        <li><a href="#">Ẩm Thực</a></li>
        <li><a href="#">Vui Chơi</a></li>
        <li><a href="index.php">Bài Viết</a>
          <ul class="sub-menu">
                <li><a href="create-post.php">Viết Bài Mới</a></li>
              
             </ul>
        </li>
        <li><a href="menu.php">Danh Mục</a>
             <ul class="sub-menu">
             <?php 
             require_once("inc/categroy.php");
                  $sql="SELECT * FROM category";
                  $query=mysqli_query($menu,$sql);
                  while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC)){
             ?>
                <li><a href="list.php?id=<?php echo $rs["id"]; ?>"><?php echo $rs["name"]; ?></a></li>
           <?php } ?>
        </li>

       </ul>
    </div><!--mwnu-->
    