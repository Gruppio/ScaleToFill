<?php

include_once './ScaleToFill.php';

$width      = 600;
$height     = 350;
$image      = imagecreatefromjpeg('./gruppio.jpg');
$resized    = scaleToFill($image, $width, $height);
imagejpeg($resized, "./out.jpg");
imagedestroy($image);
imagedestroy($resized);
?>