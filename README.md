# ScaleToFill

PHP Implementation of an a Scale To Fill algorithm for resize Images.

For resize an existing image to a size of 600 x 350 you just need to write:

```
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

```


For test the algorithm you can just write:
```
git clone git://github.com/Gruppio/ScaleToFill.git
cd ScaleToFill
php Test.php
```

Enjoy!

