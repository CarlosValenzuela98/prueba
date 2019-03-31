<?php

require 'phpqrcode/qrlib.php';

$dir = 'abdomen/';

if(!file_exists($dir))
    mkdir ($dir);

$filename = $dir.'abdomen.png';

$tamanio=3;
$level='H';
$frameSize=3;
$contenido='<a href="https://www.youtube.com/watch?v=plMlwuAjMyU>';

QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);

echo '<img src="'.$filename.'"/>';


?>