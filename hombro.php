<?php

require 'phpqrcode/qrlib.php';

$dir = 'hombro/';

if(!file_exists($dir))
    mkdir ($dir);

$filename = $dir.'hombro.png';

$tamanio=3;
$level='H';
$frameSize=3;
$contenido='<a href="https://www.youtube.com/watch?v=FpnUk_dlkf0">';

QRcode::png($contenido,$filename,$level,$tamanio,$frameSize);

echo '<img src="'.$filename.'"/>';


?>