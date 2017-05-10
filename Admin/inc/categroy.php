<?php 

   $menu=mysqli_connect( "localhost" , "root" , "" , "uneti_stupid_cms" );
   if($menu){
   	   mysqli_set_charset($menu,"utf8");
   }else{
   	   die("Có lỗi xảy ra khi kết nối vào csdl".mysqli_error($menu));
   }
?>