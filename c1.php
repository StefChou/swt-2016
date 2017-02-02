<?php 

echo 'Zdravo Svetu!<br/>';

$ime = "Stefan";
echo $ime;

$a = 10;
$b = 13;

echo '<br/>';
echo $a + $b;
echo '<br/>';
echo $a - $b;
echo '<br/>';
echo $a * $b;
echo '<br/>';
echo $a / $b;
echo '<br/>';
echo $a % $b;

echo $a * ($a + $b);
echo '<br/>';
echo $a * $a + $b;
echo '<br/>';

$integer = 123;
$float = 3.14;
$string = "TEST TEST";
$boolean = true;

echo $integer;
echo '<br/>';
echo $float;
echo '<br/>';
echo $string;
echo '<br/>';
echo $boolean;



$vistina = true;

if($vistina){
	echo 'Vistina';
} else {
	echo 'Nevistina';
}


echo '<br/>';

$c = true;
$d = false;

if($c && $d){ // и двете вредности мора да бидат true  за условот да се исполни
	echo 'Vistina';
} else {
	echo 'Nevistina';
}


echo '<br/>';

if($c || $d){ // една од двете вредности мора да биде true за условот да се исполни
	echo 'Vistina';
} else {
	echo 'Nevistina';
}


//strlen('Stefan'); //6
//$prezime = 'prezime';
//strlen($prezime); //10

echo '<br/>';
//$ime = 'Stefan';
$br = strlen($ime);
echo $br;

if(strlen($ime) % 2 == 0){
	echo 'Par';
} else {
	echo 'Nepar';
}

// if($br % 2 == 0){
// 	echo 'Par';
// } else {
// 	echo 'Nepar';
// }



// $ime = 'Janko';
// $br = strlen($ime);
// $rez = $br % 2;

// if($rez == 0){
// 	echo 'Par';
// } else {
// 	echo 'Nepar';
// }


// 1 = true
// 0 = false

//if($rez){
// 	echo 'Nepar';
// } else {
// 	echo 'Par';
// }


// <, >, >=, <=, ==, ===, !=, !==

echo '<br/>';

$g = '4';
$h = 4;

if($g == $h){ //споредба само на вредностите
	echo 'Vistina';
} else {
	echo 'Nevistina';
}

echo '<br/>';

if($g === $h){ // споредба и на вредностите и на типовите
	echo 'Vistina';
} else {
	echo 'Nevistina';
}


echo '<br/>';

$t = 'A';

if($t == 'A'){
	echo 'A';
} else if($t == 'B'){
	echo 'B';
} else {
	echo 'Nepoznata bukva!';
}


echo '<br/>';

$godini = 28;

if($godini < 15){
	echo 'Mal';
} else if ($godini >= 15 && $godini < 25){
	echo 'Mlad';
} else if ($godini >= 25 && $godini < 45){
	echo 'Vozrasen';
} else{
	echo 'Staro Magare';
}


echo '<br/>';

$den = 'pon';

switch ($den){
	case 'pon':
		echo 'Ponedelnik';
	break;
	case 'vto':
		echo 'Vtornik';
	break;
	case 'sre':
		echo 'Sreda';
	break;
	case 'cet':
		echo 'Cetvrtok';
	break;
	case 'pet':
		echo 'Petok';
	break;
	case 'sab':
		echo 'Sabota';
	break;
	case 'ned':
		echo 'Nedela';
	break;
}


echo '<br/>';

for($i = 0; $i < 10; $i++){
	echo $i;
	echo '<br/>';
}


for($i = 0; $i < 12; $i++){
	// echo $i;
	switch ($i){
		case 0:
			echo 'Januari';
		break;
		case 1:
			echo 'Februari';
		break;
		case 2:
			echo 'Mart';
		break;
		case 3:
			echo 'April';
		break;
		case 4:
			echo 'Maj';
		break;
		case 5:
			echo 'Juni';
		break;
		case 6:
			echo 'Juli';
		break;
		case 7:
			echo 'Avgust';
		break;
		case 8:
			echo 'Septemvri';
		break;
		case 9:
			echo 'Oktomvri';
		break;
		case 10:
			echo 'Noemvri';
		break;
		case 11:
			echo 'Dekemvri';
		break;
		
	}
	echo '<br/>';
}


echo '<br/>';

$j = 0;

while($j < 5){
	echo "$j<br/>";
	$j++;
}


echo '<br/>';

$k = 0;
$res = 0; // 0, 1, 3, 6, 10, 15, 21, 28, 36, 45

while ($k < 10){
	$res = $res + $k;
	$k++;
}

echo "<br/>Kraen sobirok: $res";

?>