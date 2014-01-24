<?php
    $size = 1500;
    $font_size = $size / 70;
    $dot_size = $size / 100;
    $dot_size2 = $dot_size * 2;
    $dot_size3 = $dot_size * 3;
    $font = '/usr/share/fonts/dejavu/DejaVuSerif.ttf';
    $image = imagecreate($size, $size);
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    $red = imagecolorallocate($image, 255, 0, 0);
    $blue = imagecolorallocate($image, 0, 0, 255);

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

    imageline($image, $x3, $y4, $x4, $y4, $blue);
    imagefilledpolygon($image, array($x4, $y4, $x4 - 40, $y4 - 10, $x4 - 40, $y4 + 10), 3, $blue);


    header("Content-type: image/png");
    imagepng($image);
    imagedestroy($image);

    $line[12] = array($x3, $y3, $x4, $y3);
    $line[13] = array($x3, $y3, $x5, $y3);
    $line[14] = array($x3, $y3, $x3, $y4);
    $line[15] = array($x3, $y3, $x4, $y4);
    $line[16] = array($x3, $y3, $x5, $y4);
    $line[17] = array($x3, $y3, $x3, $y5);
    $line[18] = array($x3, $y3, $x4, $y5);
    $line[19] = array($x3, $y3, $x5, $x5);

    $line[21] = array($x4, $y3, $x3, $y3);
    $line[23] = array($x4, $y3, $x5, $y3);
    $line[24] = array($x4, $y3, $x3, $y4);
    $line[25] = array($x4, $y3, $x4, $y4);
    $line[26] = array($x4, $y3, $x5, $y4);
    $line[27] = array($x4, $y3, $x3, $y5);
    $line[28] = array($x4, $y3, $x4, $y5);
    $line[29] = array($x4, $y3, $x5, $x5);

    $line[31] = array($x5, $y3, $x3, $y3);
    $line[32] = array($x5, $y3, $x4, $y3);
    $line[34] = array($x5, $y3, $x3, $y4);
    $line[35] = array($x5, $y3, $x4, $y4);
    $line[36] = array($x5, $y3, $x5, $y4);
    $line[37] = array($x5, $y3, $x3, $y5);
    $line[38] = array($x5, $y3, $x4, $y5);
    $line[39] = array($x5, $y3, $x5, $x5);

    $line[41] = array($x3, $y4, $x3, $y3);
    $line[42] = array($x3, $y4, $x4, $y3);
    $line[43] = array($x3, $y4, $x5, $y3);
    $line[45] = array($x3, $y4, $x4, $y4);
    $line[46] = array($x3, $y4, $x5, $y4);
    $line[47] = array($x3, $y4, $x3, $y5);
    $line[48] = array($x3, $y4, $x4, $y5);
    $line[49] = array($x3, $y4, $x5, $x5);

    $line[51] = array($x4, $y4, $x3, $y3);
    $line[52] = array($x4, $y4, $x4, $y3);
    $line[53] = array($x4, $y4, $x5, $y4);
    $line[54] = array($x4, $y4, $x3, $y4);
    $line[56] = array($x4, $y4, $x5, $y4);
    $line[57] = array($x4, $y4, $x3, $y5);
    $line[58] = array($x4, $y4, $x4, $y5);
    $line[59] = array($x4, $y4, $x5, $x5);

    $line[61] = array($x5, $y4, $x3, $y3);
    $line[62] = array($x5, $y4, $x4, $y3);
    $line[63] = array($x5, $y4, $x5, $y4);
    $line[64] = array($x5, $y4, $x3, $y4);
    $line[65] = array($x5, $y4, $x4, $y4);
    $line[67] = array($x5, $y4, $x3, $y5);
    $line[68] = array($x5, $y4, $x4, $y5);
    $line[69] = array($x5, $y4, $x5, $x5);

    $line[71] = array($x3, $y5, $x3, $y3);
    $line[72] = array($x3, $y5, $x4, $y3);
    $line[73] = array($x3, $y5, $x5, $y4);
    $line[74] = array($x3, $y5, $x3, $y4);
    $line[75] = array($x3, $y5, $x4, $y4);
    $line[76] = array($x3, $y5, $x5, $y4);
    $line[78] = array($x3, $y5, $x4, $y5);
    $line[79] = array($x3, $y5, $x5, $x5);

    $line[81] = array($x4, $y5, $x3, $y3);
    $line[82] = array($x4, $y5, $x4, $y3);
    $line[83] = array($x4, $y5, $x5, $y4);
    $line[84] = array($x4, $y5, $x3, $y4);
    $line[85] = array($x4, $y5, $x4, $y4);
    $line[86] = array($x4, $y5, $x5, $y4);
    $line[87] = array($x4, $y5, $x3, $y5);
    $line[89] = array($x4, $y5, $x5, $x5);

    $line[91] = array($x5, $y5, $x3, $y3);
    $line[92] = array($x5, $y5, $x4, $y3);
    $line[93] = array($x5, $y5, $x5, $y4);
    $line[94] = array($x5, $y5, $x3, $y4);
    $line[95] = array($x5, $y5, $x4, $y4);
    $line[96] = array($x5, $y5, $x5, $y4);
    $line[97] = array($x5, $y5, $x3, $y5);
    $line[98] = array($x5, $y5, $x4, $x5);

?>
