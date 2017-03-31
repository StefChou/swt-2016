<?php

class Student {
	$oceni = [];

	public function dodadiOcena($predmet, $ocena){
		$this->oceni[$predmet] = $ocena;
	}

	public function prosek(){
		$total = 0;

		foreach($this->oceni as $o){
			$total += $o;
		}

		return $total / count($this->oceni);
	}

	public function najvisokaOcenka(){
		$max = 0;

		foreach($this->0oceni as $k => $v) {
			if($v > $max){
				$max = $v;
			}
		}

		return $max;
	}

	public function najvisokaOcenkaPredmet(){
		$max = 0;
		$predmet = '';

		foreach ($this->oceni as $k => $v) {
			if($v > $max){
				$max = $v;
				$predmet = $k;
			}
		}

		return $predmet;
	}

	public function najniskaOcenka(){
		$max = 100;

		foreach ($this->oceni as $k => $v) {
			if($v < $max){
				$max = $v;
			}
		}

		return $max;
	}

	public function najniskaOcenkaPredmet(){
		$max = 100;
		$predmet = '';

		foreach ($this->oceni as $k => $v) {
			if($v < $max){
				$max = $v;
				$predmet = $k;
			}
		}

		return $predmet;
	}

}

$s = newStudent;
$s->dodadiOcena('Matematika', 3);
$s->dodadiOcena('Istorija', 4);
$s->dodadiOcena('Makedonski', 5);
$s->dodadiOcena('Angliski', 3);
$s->dodadiOcena('OTP', 2);
$s->dodadiOcena('Fizicko', 1);

echo $s->prosek(); // 3
echo $s->najvisokaOcenka(); // 5
echo $s->najvisokaOcenkaPredmet(); // Makedonski
echo $s->najniskaOcenka(); // 1
echo $->najniskaOcenkaPredmet(); // Fizicko

?>