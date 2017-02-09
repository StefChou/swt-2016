<?php 

$niza = array(); // празна низа
$niza2 = []; // празна низа


$niza3 = array('a', 'b', 'c', 'd'); //низа на вредности
$niza4 = ['e', 'f', 'g', 'h']; //низа на вредности


$niza[0] = 'i'; //додавање на елементи со индекс
$niza[1] = 'j';
$niza[2] = 'k';
$niza[3] = 'l';

$niza[] = 'm'; //додавање на елементи без индекс
$niza[] = 'n';
$niza[] = 'o';
$niza[] = 'p';


// echo $niza; //ова враќа грешка

// print_r($niza);  // печатење на низа  // поминува
// echo '<hr/>';
// var_dump($niza2); // поминува

$dolzina = count($niza);
echo $dolzina;

for ($i = 0; $i < $dolzina ; $i++){ 
	echo $niza[$i].'<br/>';
}


echo '<br/>';

$gradovi = ['Skopje','Bitola','Prilep', 'Ohrid', 'Debar', 'Struga', 'Kicevo', 'Strumica', 'Gevgelija', 'Veles'];
$a = 0;

while ($a < count($gradovi)){
	echo $gradovi[$a].'<br/>';
	$a++;
}

$max = 0;
$grad = '';
$j = 0;

while ($j < count($gradovi)){
	if (strlen($gradovi[$j]) > $max){
		$grad = $gradovi[$j];
		$max = strlen($gradovi[$j]);
	}
	$j++;
}

echo 'Grad so najgolemo ime e gradot: '.$grad;


echo '<hr/>';

$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti perspiciatis hic unde non recusandae quam ratione, illo accusantium odio, cupiditate atque voluptates nemo cumque quibusdam quae earum ut, consequatur rerum.';

$zborovi = explode(' ', $text);
// print_r($zborovi);
echo count($zborovi);

echo '<br/>';

$recenici = explode('. ', $text);
echo count($recenici);



?>