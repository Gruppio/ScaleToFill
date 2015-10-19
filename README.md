# ScaleToFill

PHP Implementation of an a Scale To Fill algorithm for resize Images.

For create an image 300 x 500 you just need to write:

```
<?php
	include_once './ScaleToFillImageEditor.php';

	$width      = 300;
	$height     = 500;
	$image      = imagecreatefromjpeg('./gruppio.jpg');
	$resized    = scaleToFill($image, $width, $height);
	imagejpeg($resized, "./out.jpg");
?>

```


