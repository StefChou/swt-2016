<?php

$filename = 'fajl.txt';
$fh = fopen($filename, 'a+');
fwrite($fh, 'PHP');

?>