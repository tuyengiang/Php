<?php

class oto{
	var $banh;
	var $mauxe;
	var $tocdo;
	var $hangxe;

	function __construct($banh=2,$mauxe="Xanh",$tocdo=10,$hangxe="Honda"){
		$this->banh=$banh;
		$this->mauxe=$mauxe;
		$this->tocdo=$tocdo;
		$this->hangxe=$hangxe;
	}
	function setbanh($banh){
		$this->banh=$banh;
	}
	function getbanh(){
		return $this->banh;
	}
	function setmauxe($mauxe){
		$this->mauxe=$mauxe;
	}
	function getmauxe(){
		return $this->mauxe;
	}
	function settocdo($tocdo){
		$this->tocdo=$tocdo;
	}
	function gettocdo(){
		return $this->tocdo;
	}
	function sethangxe($hangxe){
		$this->hangxe=$hangxe;
	}
	function gethangxe(){
		return $this->hangxe;
	}
}

class honda extends oto{
		var $kieuxe;

		function setkieuxe(){
			$this->tocdo="110";
			$this->banh="4";
			parent::getmauxe();
			parent::gethangxe();

		}
}


$oto=new oto(4,"Xanh",110,"Honda");
echo "Xe oto 1: |Bánh Xe: ". $oto->getbanh()."|Màu Xe: ". $oto->getmauxe()."|Tốc Độ Xe: ". $oto->gettocdo()."|Hãng Xe: ". $oto->gethangxe()."<br>";

$honda=new honda();
$hangxe="honda";
echo "Kiểu xe: ".$honda->setkieuxe();
echo "Toc do: ".$honda->tocdo."| Bánh xe: ".$honda->banh. "| Màu xe: ".$honda->getmauxe(). "| Hãng Xe: ". $honda->gethangxe();



