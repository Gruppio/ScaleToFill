<?php

include_once './ScaleToFillImageEditor.php';

$width      = 300;
$height     = 500;

$image      = imagecreatefromjpeg('./gruppio.jpg');
$resized    = scaleToFill($image, $width, $height);
imagejpeg($resized, "./out.jpg");
?>