<?php

class hinhhoc{
	function ve(){

	}
	function dientich(){

	}
}

class hinhvuong extends hinhhoc{
	public $canh;

	function ve(){
		echo "Vẽ Hinh Vuông<br>";
	}
	function dientich(){
		return $this->canh * $this->canh;
	}
}
class hinhchunhat extends hinhhoc{
	public $dai;
	public $rong;
	function ve(){
		echo " Vẽ Hình Chữ Nhật<br>";
	}
	function dientich(){
		return $this->dai * $this->rong;
	}
}

$hcn=new hinhchunhat();

$hcn->dai=24;
$hcn->rong=2;

echo "+<br> Diện Tích HCN= ". $hcn->dientich();

$hv=new hinhvuong();
$hv->canh=4;

echo "<br>";
echo "+ Dien Tich Hình Vuông= ". $hv->dientich();
