<?php 
   require_once("inc/lip.php");
	if( $_SERVER["REQUEST_METHOD"] == "POST" ){
		
		$title = $_POST["title"];
		$content = $_POST["content"];
		$excerpt = $_POST["excerpt"];
		$cat_id=$_POST["category"];
		$sql = "INSERT INTO posts( title , content , excerpt , user_id,cat_id )
			      VALUES  ( '{$title}' , '{$content}' , '{$excerpt}' , 1 ,$cat_id) ";
		$query = mysqli_query( $conn , $sql );
		if( $query ){
			echo " <h1>Viết Bài Thành Công</h1>";
		}else{
			echo "<h1>Viết Bài Thất Bại</h1>"  . mysqli_error($conn);
		}
	}
 ?>
<?php require_once("templace/head_ad.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("templace/content3.php"); ?>
<?php require_once("tem/bottom.php"); ?>