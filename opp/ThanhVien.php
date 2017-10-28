<?php 

	class ThanhVien{
		private $connection;
		public $id;
		public $name;
		public $info;
		public $ma_lop;
		public function __construct($id=false,$name=false,$info=false,$ma_lop=false){
				$this->id=$id;
				$this->name=$name;
				$this->info=$info;
				$this->ma_lop=$ma_lop;
		}
		public function setmysqlerror(){
			return mysqli_error($this->connect);
		}
		public function setconnection($host,$username,$password,$dbname){
				$this->connect=mysqli_connect($host,$username,$password,$dbname);
				if($this->connect){
					mysqli_set_charset($this->connect,"utf8");
				}else{
					die("không thể kết nối được db");
					
				}
		}
		public function findByid($id){
				$sql="SELECT * FROM thanhvien WHERE id='{$id->id}'";
				$query=mysqli_query($this->connect,mysqli_escape_string($this->connect,$sql));
				$thanhvien=mysqli_fetch_object($query);
				return $thanhvien;
		}
		public function findByname($thanhvien){
				$name = mysqli_escape_string( $this->connection, $name );
				$sql="SELECT * FROM thanhvien WHERE name='{$thanhvien->name}'";

				$rs=mysqli_query($this->connect,$sql);
				$thanhVienArr = array();
				while( $thanhVien = mysqli_fetch_object( $rs ) ){
				$thanhVienArr[] = $thanhVien;
			}
			return $thanhVienArr;
		}
		public function deleteByid($id){
				$sql="DELETE FROM thanhvien WHERE id='{$id}'";
				$query=mysqli_query($this->connect,$this->connect,$sql);
				return $query==true ? true: false;
		}
		public function create($thanhvien){
				$thanhvien->name=mysqli_escape_string($this->connect, $thanhvien->name);
				$thanhvien->info=mysqli_escape_string($this->connect, $thanhvien->info);
				$thanhvien->ma_lop=mysqli_escape_string($this->connect, $thanhvien->ma_lop);
				//escap tung biên một mới bắt đầu xử lý

				$sql="INSERT INTO thanhvien(name,info,ma_lop) 
				VALUES('{$thanhvien->name}','{$thanhvien->info}','{$thanhvien->ma_lop}')";
				$query=mysqli_query($this->connect,$sql);

				return $query==true ? true : false;
		}
		public  function update($thanhvien){
				$thanhvien->name=mysqli_escape_string($this->connect, $thanhvien->name);
				$thanhvien->info=mysqli_escape_string($this->connect, $thanhvien->info);
				$thanhvien->ma_lop=mysqli_escape_string($this->connect, $thanhvien->ma_lop);
				//escap tung biên một mới bắt đầu xử lý

				$sql="UPDATE thanhvien SET name='{$thanhvien->name}',info='{$thanhvien->info}',ma_lop='{$thanhvien->ma_lop}' WHERE id='{$thanhvien->id}'";
				$query=mysqli_query($this->connect,$sql);
				return $query==true ? true: false;

		}
		public function getALL(){
				$sql="SELECT * FROM thanhvien";
				$query=mysqli_query($this->connect,$sql);
				$allthanhvien=array();
				while($all=mysqli_fetch_array($query,MYSQLI_ASSOC)){
					$allthanhvien[]=$all;
				}
				return $allthanhvien;
		}

	}