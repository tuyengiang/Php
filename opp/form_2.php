<?php
	require_once("post.php");
	$post=new post();
	$post->setconnection("localhost","root","","query_test");
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$messenger="";
		if($_POST["action"]=="insert"){
			$title=$_POST["title"];
			$content=$_POST["content"];
			$excerpt=$_POST["excerpt"];
			$new=$post->insert($title,$content,$excerpt);
			if($new){
				$messenger="Thêm Bài Thành Công";
			}else{
				$messenger="Thêm Bài Thất Bại".$post->setmysqlerror();
			}
		}
		if($_POST["action"]=="search"){
			$title=$_POST["title"];
			$new=$post->findbyname($title);
			if(!empty($new)){
				$messenger="Không có Kết Quả Tìm Kiếm ". $title;
			}
		}
		if($_POST["action"]=="delete"){
			$id=$_POST["id"];
			$new=$post->deleteid($id);
			if(!empty($new)){
				$messenger="KHông xóa dduojc id=  ". $id;
			}
		}
	}
	
?>
<div id="mes">
	<?php 
			if(!empty($messenger)){
				echo $messenger;
			}

	 ?>

</div><!--mes-->
<h1>Thêm Bài Viết</h1>
<form method="post">
	<label>
		<h4>Tên Bài Viết</h4>
		<input type="text" name="title">
	</label>
	<label>
		<h4>Content</h4>
		<textarea name="content"></textarea>
	</label>
	<label>
		<h4>Excerpt</h4>
		<textarea name="excerpt"></textarea>
	</label>
	<button type="submit">Thêm</button>
	<input type="hidden" name="action" value="insert">
</form><br>
<h1> Tìm Bài Viết</h1>
<form method="post">
	<label>
		<h4>Tên Bài Viết</h4>
		<input type="text" name="title">
	</label>
	
	<button type="submit">Tìm</button>
	<input type="hidden" name="action" value="search">
</form>
<br>
<h2> Xóa Bài Viết</h2>
<form method="post">
	<label>
		<h4>Id</h4>
		<input type="text" name="id">
	</label>
	
	<button type="submit">Xóa</button>
	<input type="hidden" name="action" value="delete">
</form>