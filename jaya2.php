<?php

	class Buku{
		

			public $jdl, $pnrbt, $nmpnls, $hal;
			public function __construct($jdl = "Judul Buku", $pnrbt = "Penulis", $nmpnls = "Penerbit", $hal = "Jumlah Halaman"){
				$this->jdl = $jdl;
				$this->pnrbt = $pnrbt;
				$this->nmpnls = $nmpnls;
				$this->hal = $hal;
			
			}
			public function getinfoBook(){

				$bku = "<br>Judul Buku : {$this->jdl}, <br>Penulis  : {$this->pnrbt}, <br>Penerbit : {$this->nmpnls}, <br>Jumlah Halaman : {$this->hal}";

				return $bku;		
			}
	}

	Class BukuSatu extends Buku {

		public function getinfoBook(){
			$bku = "Buku 1 : ".parent::getinfoBook()."<br>Harga :100.000";
			return $bku;
		
		}
	}
	class BukuDua extends Buku{

		public $rwyt;
		public function __construct($jdl, $pnrbt, $nmpnls, $hal, $rwyt){
			parent::__construct($jdl, $pnrbt, $nmpnls,$hal, $rwyt);
			$this->rwyt = $rwyt;
		}
		public function getinfoBook(){

			$bku = "Buku 2 : ".parent::getinfoBook()."<br>Harga : {$this->rwyt}";
			return $bku;
		}
	}	

	$bku1 = new BukuSatu("The Islamic Invasion", "Robert A. Morey", "C.V Focul Muslimedia", "416","85.000");
	$bku2 = new BukuDua("Filsafat Islam", "Prof.Dr.H.Musa Asy'arie", "Lesfi", "261", "85.000");

	echo $bku1->getinfoBook();
	echo "<br>";
	echo "<br>";
	echo $bku2->getinfoBook();


?>