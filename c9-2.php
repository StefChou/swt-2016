<?php

class A {
	private $podatoci = [];

	public function __set($name, $value){
		$this->podatoci[$name] = $value;
	}

	public function __get($name){
		return $this->podatoci[$name];
	}
}

$a = new A;
$a->ime = 'Pero';
$a->prezime = 'Perovski';

// echo $a->ime;
// print_r($a);

class B {
	private $ime;

	public function setIme($i){
		$this->ime = $i;
	}

	public function __get($key){
		return $this->$key;
	}
}

$b = new B;
// $b->ime = 'Stef';
$b->setIme('Stef');
// echo $b->ime;


class C {
	public function __call($method, $attributes){
		// echo "<br/>Tralalalla...$method";
	}
}

$c = new C;
$c->sing();
$c->play();
$c->dance();
$c->start();
$c->end();


class D {
	public function __call($method, $attributes){
		echo "Method: $method, Attributes:" .implode(', ', $attributes);
	}
}

$d = new D;

$d->jadi('Pizza', 'Burger', 'Burek');
echo '<br/>';
$d->setStudent('Stef', 'Chou', 3, 7.2);
echo '<br/>';
$d->pej('Tralalala');

?>