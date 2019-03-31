<?php

require 'phpqrcode/qrlib.php';

$dir = 'espalda/';

if(!file_exists($dir))
    mkdir ($dir);

$filename = $dir.'espalda.png';

$tamanio=3;
$level='H';
$frameSize=3;
$contenido='<a href="https://www.youtube.com/watch?v=1m2v7JBtmiM&t">';

QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);

echo '<img src="'.$filename.'"/>';


?>