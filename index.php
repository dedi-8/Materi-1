<?php

class hewan{
	public $jumlah_kaki, $bersuara, $bisa_terbang;

	public function cetaktipe(){
		return $this->jumlah_kaki;
	}
}

class kucing extends hewan{
	public $bisa_terbang = "Tidak Bisa Terbang";
	function bersuara(){
		echo "Meooooooong Meooooooong";
	}
}

class anjing extends hewan{
	public $bisa_terbang = "Tidak Bisa Terbang";
	function bersuara(){
		echo "guk guk guk guk";
	}
}

class elang extends hewan{
	public $bisa_terbang = "Bisa Terbang";
	function bersuara(){
		echo "Miiip Miiip MiiipMiiip";
	}
}

class angsa extends hewan{
	public $bisa_terbang = "Bisa Terbang";
	function bersuara(){
		echo "Kwaaaak Kwaaak Kwaaak";
	}
}




$momo = new kucing;
$momo->jumlah_kaki = 4;
echo "Momo Adalah Kucing <br>";
echo "Punya Kaki Sebanyak : ".$momo->jumlah_kaki. "<br>";
echo $momo->bisa_terbang."<br>";
echo "Suaranya : ";$momo->bersuara(). "<br>";

echo "<hr>";

$doggo = new anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo Adalah Anjing <br>";
echo "Punya Kaki Sebanyak : ".$doggo->jumlah_kaki. "<br>";
echo $doggo->bisa_terbang. "<br>";
echo "Suaranya : ";$doggo->bersuara(). "<br>";

echo "<hr>";

$zya = new elang;
$zya->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo "Punya Kaki Sebanyak : ".$zya->jumlah_kaki. "<br>";
echo $zya->bisa_terbang. "<br>";
echo "Suaranya : ";$zya->bersuara(). "<br>";

echo "<hr>";

$masha = new angsa;
$masha->jumlah_kaki = 2;
echo "Masha Adalah Angsa <br>";
echo "Punya Kaki Sebanyak : ".$masha->jumlah_kaki. "<br>";
echo $zya->bisa_terbang. "<br>";
echo "Suaranya : ";$masha->bersuara(). "<br>";

