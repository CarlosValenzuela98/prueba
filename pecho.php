<?php

require 'phpqrcode/qrlib.php';

$dir = 'pecho/';

if(!file_exists($dir))
    mkdir ($dir);

$filename = $dir.'pecho.png';

$tamanio=3;
$level='H';
$frameSize=3;
$contenido='<a href="https://www.youtube.com/watch?v=8GrE0JAS4wg">';

QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);

echo '<img src="'.$filename.'"/>';


?>