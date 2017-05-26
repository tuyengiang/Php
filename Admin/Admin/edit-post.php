<?php
	require_once ("inc/lip.php");

	$id = $_GET["id"];

	$sql = "SELECT * FROM posts WHERE id = {$id}";

	$query =mysqli_query( $conn , $sql );

	$rs1 = mysqli_fetch_array( $query , MYSQLI_ASSOC );

	if( empty($rs1) ){
		echo "Bài viết không tại ";
		return;
	}
		
	if( $_SERVER["REQUEST_METHOD"] == "POST" ){

				$title = $_POST["title"];
				$content = $_POST["content"];
				$excerpt = $_POST["excerpt"];
				$cat_id=$_POST["category"];

		$sql ="UPDATE posts SET title='{$title}',excerpt='{$excerpt}',content='{$content}',cat_id='{$cat_id}' WHERE id={$id} ";

		$row = mysqli_query( $conn , $sql);

		if( $row ){
			echo " <h1>Sửa Thành Công</h1>";
		}else{
			echo "<h1>Sửa Thất Bại</h1>" .mysqli_error($conn);
		}
	
}
?>
<?php require_once("templace/head_ad.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("templace/content2.php"); ?>
<?php require_once("tem/bottom.php"); ?>