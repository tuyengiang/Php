<?php
		class post{
			public $connection;
			public $id;
			public $title;
			public $content;
			public $excerpt;

			public function __construct($id=false,$title=false,$content=false,$excerpt=false){
				$this->id=$id;
				$this->title=$title;
				$this->content=$content;
				$this->excerpt-$excerpt;
			}
			public function setconnection($host,$user,$pass,$dbname){
				$this->connection=mysqli_connect($host,$user,$pass,$dbname);
				if($this->connection){
					mysqli_set_charset($this->connection,"utf8");
				}else{
					die("Không kết nối được database").mysqli_error($this->connection);
				}
			}

			public function setmysqlerror(){
				return mysqli_error($this->connection);
			}

			public function insert($post){
				$post->$title=mysqli_escape_string($this->connection,$post->title);
				$post->$content=mysqli_escape_string($this->connection,$post->content);
				$post->$excerpt=mysqli_escape_string($this->connection,$post->excerpt);

				$sql="INSERT INTO post(title,content,excerpt)
					VALUES('{$post->title}','{$post->content}','{$post->excerpt}')";
				$query=mysqli_query($this->connection,$sql);
				
					return $query==true ?true : flase;
				
			}

			public function update($post){
				$title=mysqli_escape_string($this->connection,$post->title);
				$content=mysqli_escape_string($this->connection,$post->content);
				$excerpt=mysqli_escape_string($this->connection,$post->excerpt);

				$sql="UPDATE post
					SET title='{$post->title}',content='{$post->content}',excerpt='{$post->excerpt}'";
				$query=mysqli_query($this->connection,$sql);
				
					return $query==true ?true : flase;
			}
			public function deleteid($id){
				$sql="DELETE FROM post WHERE id='{$id}'";
				$query=mysqli_query($this->connection,$sql);
				return $query==true ?true : flase;

			}

			public function findbyid($id){
				$sql="SELECT  * FROM post WHERE id='{$id}'";
				$query=mysqli_query($this->connection,$sql);
				$post=mysqli_fetch_object($query);
				return $post;
			}
			public function findbyname($title){
				$title = mysqli_escape_string( $this->connection, $title );
				$sql = "SELECT * FROM thanh_vien WHERE name = '$title' ";
				$rs = mysqli_query( $this->connection, $sql );
				$postArr = array();
				while( $post = mysqli_fetch_object( $rs ) ){
					$postArr[] = $post;
				}
				return $postArr;
			}
	}

