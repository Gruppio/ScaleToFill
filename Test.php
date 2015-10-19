<?php

include_once './ScaleToFillImageEditor.php';

$width      = 600;
$height     = 350;
$image      = imagecreatefromjpeg('./gruppio.jpg');
$resized    = scaleToFill($image, $width, $height);
imagejpeg($resized, "./out.jpg");
?>