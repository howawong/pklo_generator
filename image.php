<?php
    error_reporting(E_ALL);
    header('Content-type: image/png');
    $png_image = imagecreatefrompng('bg.png');
    $black = imagecolorallocate($png_image, 0, 0, 0);
    $font = './default.ttc';
    $message = $_GET["message"];
    $title_font_size = 30;
    imagettftext($png_image, $title_font_size, 0, 35, 250, $black, $font, $message);
    imagepng($png_image, NULL, 4, NULL);
    imagedestroy($png_image);
?>
