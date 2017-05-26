<?php 
	require_once( "inc/lip.php" );
	if(isset($_POST["delete"])  ){
		$id = $_POST["delete"];
		$sql = "DELETE FROM posts WHERE id = {$id}";
		$rs = mysqli_query( $conn , $sql );
		if( $rs ){
			echo "<h1>Xóa thành công ! </h1>";
		}else{
			echo "<h1>Xóa thất bại ! <h1>";
		}
	}
?>


<?php require_once("templace/head_ad.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("templace/content.php"); ?>
<?php require_once("tem/bottom.php"); ?>

</html>