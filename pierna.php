<?php

require 'phpqrcode/qrlib.php';

$dir = 'pierna/';

if(!file_exists($dir))
    mkdir ($dir);

$filename = $dir.'pierna.png';

$tamanio=3;
$level='H';
$frameSize=3;
$contenido='<a href="https://www.youtube.com/watch?v=RAuG5lKQNEI>';

QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);

echo '<img src="'.$filename.'"/>';


?>