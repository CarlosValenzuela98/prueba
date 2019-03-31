<?php

require 'phpqrcode/qrlib.php';

$dir = 'brazo/';

if(!file_exists($dir))
    mkdir ($dir);

$filename = $dir.'brazo.png';

$tamanio=3;
$level='H';
$frameSize=3;
$contenido='<a href="https://www.youtube.com/watch?v=r9OZ0xsm3MA&t>';

QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);

echo '<img src="'.$filename.'"/>';


?>