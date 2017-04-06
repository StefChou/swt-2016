<?php

abstract class Vozilo {
	protected $brojTrkala;
	protected $gorivo;
	protected $proizvoditel;

	public function setBrojTrkala($br){
		$this->brojTrkala = $br;
	}

	public function getBrojTrkala(){
		return $this->brojTrkala;
	}

	public function setGorivo($g){
		$this->gorivo = $g;
	}

	public function getGorivo(){
		return $this->gorivo;
	}

	public function setProizvoditel($p){
		$this->proizvoditel = $p;
	}

	public function getProizvoditel(){
		return $this->proizvoditel;
	}
}

interface iVozilo {
	public function zapali();
}


class PatnickoVozilo extends Vozilo implements iVozilo {
	private $brojSedishta;
	private $brojPernicinja;

	public function setBrojSedishta($s){
		$this->brojSedishta = $s;
	}

	public function getBrojSedishta(){
		return $this->brojSedishta;
	}

	public function setBrojPernicinja($p){
		$this->brojPernicinja = $p;
	}

	public function getBrojPernicinja(){
		return $this->brojPernicinja;
	}

	public function zapali(){
		echo 'Palam na kopche... Vroooomm!!!';
	}
}

class TovarnoVozilo extends Vozilo implements iVozilo {
	private $nosivost;

	public function setNosivost($n){
		$this->nosivost = $n;
	}

	public function getNosivost(){
		return $this->nosivost;
	}

	public function zapali(){
		echo 'Palam na kluch... Tak tak tak tak!!!';
	}
}

$v = new PatnickoVozilo;
$v->zapali();

echo '<br/>';

$t = new TovarnoVozilo;
$t->zapali();

?>