<?php 

$student = array(
	'ime' => 'Stefan',
	'prezime' => 'Stojkovski',
	'prosek' => 6.2
);

echo count($student);
echo '<br/>';
// echo $student['ime'];
// echo '<br/>';
// echo $student['prezime'];
// echo '<br/>';
// echo $student['prosek'];

foreach ($student as $detail_key => $detail_value) {
	echo $detail_key.': '.$detail_value.'<br/>';
}

echo '<hr/>';




$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti perspiciatis hic unde non recusandae quam ratione, illo accusantium odio, cupiditate atque voluptates nemo cumque quibusdam quae earum ut, consequatur rerum.';

$max = 0;
$zborovi = explode(' ', $text);
$z = ' ';

foreach ($zborovi as $zbor) {
	if (strlen($zbor) > $max) {
		$max = strlen($zbor);
		$z = $zbor;
	}
}

echo 'Najdolg zbro vo tekstot e zborot: '.$z;

?>