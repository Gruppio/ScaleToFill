<?php

function scaleToFill($srcImage, $width, $height)
{
    if ($width  < 1) $width  = 1;
    if ($height < 1) $height = 1;
    
    // Create the output image
    $dstImage = imagecreatetruecolor($width, $height);
    imagefill($dstImage, 0, 0, imagecolorallocate($dstImage, 255, 255, 255));
    
    $srcWidth           = imagesx($srcImage);
    $srcHeight          = imagesy($srcImage);
    
    // Parameters for resampling
    $selectedSrcX       = 0;
    $selectedSrcY       = 0;
    $selectedSrcWidth   = $srcWidth;
    $selectedSrcHeight  = $srcHeight;
    
    // Choose if the dstImage fits better by whidth or by height
    $widthRatio         = $srcWidth  / $width;
    $heightRatio        = $srcHeight / $height;
    
    if ($heightRatio > $widthRatio)
    {
        $selectedSrcHeight  = round($height * $widthRatio);
        $selectedSrcY       = round(($srcHeight - $selectedSrcHeight)/2);
    }
    else
    {
        $selectedSrcWidth   = round($width * $heightRatio);
        $selectedSrcX       = round(($srcWidth - $selectedSrcWidth)/2);
    }

    imagecopyresampled($dstImage, $srcImage, 0, 0, $selectedSrcX, $selectedSrcY, $width, $height, $selectedSrcWidth, $selectedSrcHeight);
    return $dstImage;
}

?>
