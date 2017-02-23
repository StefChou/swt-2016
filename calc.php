<?php

switch ($_GET['op']) {
	case 'plus':
		echo $_GET['a'] + $_GET['b'];
		break;
	case 'minus':
		echo $_GET['a'] - $_GET['b'];
		break;
	case 'multiply':
		echo $_GET['a'] * $_GET['b'];
		break;
	case 'devide':
		echo $_GET['a'] / $_GET['b'];
		break;
	case 'modulo':
		echo $_GET['a'] % $_GET['b'];
		break;
}

?>