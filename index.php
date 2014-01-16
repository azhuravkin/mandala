<?php
    $size = 1200;
    $font_size = $size / 70;
    $dot_size = $size / 100;
    $dot_size2 = $dot_size * 2;
    $dot_size3 = $dot_size * 3;
    $font = '/usr/share/fonts/dejavu/DejaVuSerif.ttf';
    $image = imagecreate($size, $size);
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    $red = imagecolorallocate($image, 255, 0, 0);

    $side_of_square = $size / sqrt(2);
    $x2 = $y2 = ($size - $side_of_square) / 2;
    $x1 = $y1 = $x2 / 2;
    $x3 = $y3 = $size / 4;
    $x4 = $y4 = $size / 2;
    $x5 = $y5 = $size - $x3;
    $x6 = $y6 = $side_of_square + $x2;
    $x7 = $y7 = $x6 + $x1;

    imagesetthickness($image, 4);

    imagearc($image, $x4, $y4, $size, $size, 0, 180, $black);
    imagearc($image, $x4, $y4, $size, $size, 180, 360, $black);

    imagerectangle($image, $x2, $y2, $x6, $y6, $black);

    imagepolygon($image, array($x4, $y2, $x5, $y3, $x6, $x4, $x5, $y5, $x4, $y6, $x3, $y5, $x2, $y4, $x3, $y3), 8, $black);

    imageline($image, $x4, $y1, $x4, $y2, $black);
    imageline($image, $x6, $y4, $x7, $y4, $black);
    imageline($image, $x4, $y6, $x4, $y7, $black);
    imageline($image, $x1, $y4, $x2, $y4, $black);

    imagearc($image, $x4, $y4, $x6, $y6, 260, 280, $black);
    imagearc($image, $x4, $y4, $x6, $y6, 350, 10, $black);
    imagearc($image, $x4, $y4, $x6, $y6, 80, 100, $black);
    imagearc($image, $x4, $y4, $x6, $y6, 170, 190, $black);

    imagefilledellipse($image, $x3, $y3, $dot_size, $dot_size, $black);
    imagefilledellipse($image, $x4, $y3, $dot_size, $dot_size, $black);
    imagefilledellipse($image, $x5, $y3, $dot_size, $dot_size, $black);
    imagefilledellipse($image, $x3, $y4, $dot_size, $dot_size, $black);
    imagefilledellipse($image, $x4, $y4, $dot_size, $dot_size, $black);
    imagefilledellipse($image, $x5, $y4, $dot_size, $dot_size, $black);
    imagefilledellipse($image, $x3, $y5, $dot_size, $dot_size, $black);
    imagefilledellipse($image, $x4, $y5, $dot_size, $dot_size, $black);
    imagefilledellipse($image, $x5, $y5, $dot_size, $dot_size, $black);

    imagettftext($image, $font_size, 0, $x3 - $dot_size2, $y3 - $dot_size, $black, $font, '1');
    imagettftext($image, $font_size, 0, $x4 - $dot_size, $y3 - $dot_size, $black, $font, '2');
    imagettftext($image, $font_size, 0, $x5, $y3 - $dot_size, $black, $font, '3');
    imagettftext($image, $font_size, 0, $x3 - $dot_size3, $y4, $black, $font, '4');
    imagettftext($image, $font_size, 0, $x4 - $dot_size3, $y4 - $dot_size, $black, $font, '5');
    imagettftext($image, $font_size, 0, $x5 + $dot_size2, $y4, $black, $font, '6');
    imagettftext($image, $font_size, 0, $x3 - $dot_size2, $y5 + $dot_size2, $black, $font, '7');
    imagettftext($image, $font_size, 0, $x4 - $dot_size, $y5 + $dot_size2, $black, $font, '8');
    imagettftext($image, $font_size, 0, $x5 + $dot_size, $y5 + $dot_size2, $black, $font, '9');

    header("Content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>
