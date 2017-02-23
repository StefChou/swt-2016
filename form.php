<?php

//echo $_POST['grad'];

switch ($_POST['op']) {
	case 'plus':
		echo $_POST['a'] + $_POST['b'];
		break;
	case 'minus':
		echo $_POST['a'] - $_POST['b'];
		break;
	case 'multiply':
		echo $_POST['a'] * $_POST['b'];
		break;
	case 'devide':
		echo $_POST['a'] / $_POST['b'];
		break;
	case 'modulo':
		echo $_POST['a'] % $_POST['b'];
		break;
}

?>