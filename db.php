<?php 

header('Content-Type: text/html; charset=utf8');
$config = 'mysql:host=127.0.0.1;dbname=sa_site';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);


$sql = "SET NAMES UTF8";
$query = $db->query($sql);

$sql_professors = 'select * from professors where academy like "%Веб Дизајн%"';
$query_professors = $db->query($sql_professors);
$professors = $query_professors->fetchAll(PDO::FETCH_ASSOC);
// print_r($professors);

?>

<table border="1">
	<?php foreach ($professors as $profs) { ?>
		<tr>
			<td><?=$profs['id']?></td>
			<td><?=$profs['first_name']?></td>
			<td><?=$profs['last_name']?></td>
			<td><?=$profs['description']?></td>
			<td><?=$profs['academy']?></td>
			<td><?=$profs['photo']?></td>
		</tr>
	<?php } ?>
</table>