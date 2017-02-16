<?php 
	$title = 'PHP in HTML';
	$denovi = ['pon', 'vto', 'sre', 'cet', 'pet', 'sab', 'ned'];
	$meseci = ['jan', 'feb', 'mar', 'apr', 'maj', 'jun', 'jul', 'avg', 'sep', 'oct', 'nov', 'dec'];
	$studenti = [
		['ime' => 'Stefan Blazevski', 'ocena' => 3],
		['ime' => 'Martin Danev', 'ocena' => 4],
		['ime' => 'Martin Poastolovski', 'ocena' => 2],
		['ime' => 'Stefan Stojkovski', 'ocena' => 2],
		['ime' => 'Irina Dobrohotova', 'ocena' => 5],
	];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title><?=$title?></title>
	</head>
	<body>
		
		<h1><?=$title?></h1>
		<ul>
			<?php foreach ($denovi as $den) { ?>
			<li><?=$den?></li>
			<!-- <li>vto</li>
			<li>sre</li>
			<li>cet</li>
			<li>pet</li>
			<li>sab</li>
			<li>ned</li> -->
			<?php } ?>

			<?php foreach ($meseci as $mnth) { ?>
				<h3><?=$mnth?></h3>
			<?php } ?>
		</ul>

		<table border="1">
			<tr>
				<th>Student</th>
				<th>Ocena</td>
			</tr>
			
			<?php foreach ($studenti as $student) { ?>
				<tr>
					<td><?=$student['ime']?></td>
					<?php 
						$color = 'green';
						if($student['ocena'] < 3){
							$color = 'red';
						}
					?>
					<td style="background-color : <?=$color?>">
					<!-- <td style="color: <?=$student['ocena'] > 3 ? 'green' : 'red' ?>"> -->
					<?=$student['ocena']?>	
					</td>
				</tr>
			<?php } ?>

	<!-- 		<tr>
				<td>Stefan Blazevski</td>
				<td>10</td>
			</tr>
			<tr>
				<td>Martin Danev</td>
				<td>9</td>
			</tr>
			<tr>
				<td>Martin Postolovski</td>
				<td>8</td>
			</tr>
			<tr>
				<td>Stefan Stojkovski</td>
				<td>9</td>
			</tr>
			<tr>
				<td>Irina Dobrohotova</td>
				<td>10</td>
			</tr> -->
		</table>

		

	</body>
</html>