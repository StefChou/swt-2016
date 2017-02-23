<?php

//http://127.0.0.1/swt-2016/include.php?include=c1.php

//include($_GET['page']);
//include(c1.php);

$file = $_GET['page'].'.php';

$exists = file_exists($file);

if ($exists == true) {
	//echo 'File exists';
	// include($_GET['page']);
	include($file);
} else {
	echo 'File not found';
}


?>