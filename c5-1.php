<?php

$filename = 'formular.txt';
$fh = fopen($filename, 'a+');
fwrite($fh, $_POST['ime'].' '.$_POST['email'].'; ');
rewind($fh);
$fr = fread($fh, filesize($filename));
$list = explode('; ', $fr);
fclose($fh);

?>

<ul>
	<?php foreach ($list as $li){ ?> 
		<li><?= $li ?></li>
	<?php } ?>
</ul>

<!-- za domasno: formularot od predhodniot cas (validacija), na toj kod ako e validen da gi zapise podatocite vo fajl. Koga ke gi zapisuva podatocite vo fajl da moze da gi procitame i da gi zapiseme vo tabela.(Pecatenjeto da bide vo tabela) -->