<?php

function sobiranje ($a, $b){
	return $a + $b;
}

// echo sobiranje (15, 5);

function _test_sobiranje($data){
	foreach ($data as $s) {
		$res = sobiranje($s['br1'], $s['br2']);

		if ($res === $s['expected']){
			echo '<span style="color: green;">Success!</span><br/>';
		} else {
			echo '<span style="color: red;">Fail!</span><br/>';
		}
	}
}

$data = [
	[
		'br1' => 15,
		'br2' => 5,
		'expected' => 20
 	],
 	[
		'br1' => 25,
		'br2' => 5,
		'expected' => 30
 	],
 	[
		'br1' => 15,
		'br2' => 7,
		'expected' => 24
 	],
 	[
		'br1' => 18,
		'br2' => 9,
		'expected' => 27
 	],
 	[
		'br1' => 27,
		'br2' => 20,
		'expected' => 47
 	],
];

_test_sobiranje($data);

?>