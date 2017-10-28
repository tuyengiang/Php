<?php 
	class XeMay{
		//properties thuoc tinh
		var $banhxe;
		var $tocdo;
		var $mauxe;
		var $hangsx;
		//khoi tao

		function __construct($banhxe=2,$tocdo=60,$mauxe="Không Biết",$hangsx="Không Biết"){
			//tham so mac dinh
			$this->banhxe=$banhxe;
			$this->tocdo=$tocdo;
			$this->mauxe=$mauxe;
			$this->hangsx=$hangsx;
		}


		//phuong thuc - method
		function gettocdo(){
			return $this->tocdo;
		}
		function settocdo($tocdo){
			$this->tocdo=$tocdo;
		}

		function getmauxe(){
			return $this->mauxe;
		}
		function setmauxe($mauxe){
			$this->mauxe=$mauxe;
		}

		function gethangsx(){
			return $this->hangsx;
		}
		function sethangsx($hangsx){
			$this->hangsx=$hangsx;
		}

		function getbanhxe(){
			return $this->banhxe;
		}
		function setbanhxe($banhxe){
			$this->banhxe=$banhxe;
		}
	}



	//tesst


	$xeMay = new xemay(); // khong khoi tao tham so
	$xeMay2= new xemay(2,70,"do","honda"); // full tham so
	$xeMay3=new xemay(4,100);
	
	echo "<br> Xe máy 1 tốc độ là: ". $xeMay->gettocdo() . "| hang sx: " . $xeMay->getHangSx() . "| mau : " . $xeMay->getMauXe();

	echo "<br> Xe máy 2 tốc độ là: ". $xeMay2->gettocdo() . "| hang sx: " . $xeMay2->gethangSx() . "| mau : " . $xeMay2->getMauXe();

	echo "<br> Xe máy 3 tốc độ là: ". $xeMay3->gettocdo() . "| hang sx: " . $xeMay3->gethangSx() . "| mau : " . $xeMay3->getMauXe();
 	
