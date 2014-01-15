<?php
    $size = 2000;
    $font_size = $size / 70;
    $font = '/usr/share/fonts/dejavu/DejaVuSerif.ttf';
    $image = imagecreate($size, $size);
    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    $red = imagecolorallocate($image, 255, 0, 0);

    imagesetthickness($image, 3);

//    imageellipse($image, $size / 2, $size / 2, $size, $size, $black);
    imagearc($image, $size / 2, $size / 2, $size, $size, 0, 180, $black);
    imagearc($image, $size / 2, $size / 2, $size, $size, 180, 360, $black);

    $side_of_square = $size / sqrt(2);
    $square_xy_1 = ($size - $side_of_square) / 2;
    $square_xy_2 = $side_of_square + $square_xy_1;
    imagerectangle($image, $square_xy_1, $square_xy_1, $square_xy_2, $square_xy_2, $black);

    $polygon = array(
	$side_of_square / 2 + $square_xy_1, $square_xy_1,
	$size - $size / 4, $size / 4,
	$side_of_square + $square_xy_1, $side_of_square / 2 + $square_xy_1,
	$size - $size / 4, $size - $size / 4,
	$side_of_square / 2 + $square_xy_1, $side_of_square + $square_xy_1,
	$size / 4, $size - $size / 4,
	$square_xy_1, $side_of_square / 2 + $square_xy_1,
	$size / 4, $size / 4
    );
    imagepolygon($image, $polygon, 8, $black);

    imageline($image, $size / 2, $square_xy_1 / 2, $size / 2, $square_xy_1, $black);
    imageline($image, $square_xy_2, $size / 2, $square_xy_2 + $square_xy_1 / 2, $size / 2, $black);
    imageline($image, $size / 2, $square_xy_2, $size / 2, $square_xy_2 + $square_xy_1 / 2, $black);
    imageline($image, $square_xy_1 / 2, $size / 2, $square_xy_1, $size / 2, $black);

    imagearc($image, $size / 2, $size / 2, $size - $square_xy_1, $size - $square_xy_1, 260, 280, $black);
    imagearc($image, $size / 2, $size / 2, $size - $square_xy_1, $size - $square_xy_1, 350, 10, $black);
    imagearc($image, $size / 2, $size / 2, $size - $square_xy_1, $size - $square_xy_1, 80, 100, $black);
    imagearc($image, $size / 2, $size / 2, $size - $square_xy_1, $size - $square_xy_1, 170, 190, $black);

    imagefilledellipse($image, $size / 4, $size / 4, $size / 100, $size / 100, $black);
    imagefilledellipse($image, $size / 2, $size / 4, $size / 100, $size / 100, $black);
    imagefilledellipse($image, $size - $size / 4, $size / 4, $size / 100, $size / 100, $black);
    imagefilledellipse($image, $size / 4, $size / 2, $size / 100, $size / 100, $black);
    imagefilledellipse($image, $size / 2, $size / 2, $size / 100, $size / 100, $black);
    imagefilledellipse($image, $size - $size / 4, $size / 2, $size / 100, $size / 100, $black);
    imagefilledellipse($image, $size / 4, $size - $size / 4, $size / 100, $size / 100, $black);
    imagefilledellipse($image, $size / 2, $size - $size / 4, $size / 100, $size / 100, $black);
    imagefilledellipse($image, $size - $size / 4, $size - $size / 4, $size / 100, $size / 100, $black);

    imagettftext($image, $font_size, 0, $size / 4 - $size / 100, $size / 4 - $size / 100, $black, $font, '1');
    imagettftext($image, $font_size, 0, $size / 2 - $size / 100, $size / 4 - $size / 100, $black, $font, '2');
    imagettftext($image, $font_size, 0, $size - $size / 4 - $size / 100, $size / 4 - $size / 100, $black, $font, '3');
    imagettftext($image, $font_size, 0, $size / 4 - $size / 100, $size / 2 - $size / 100, $black, $font, '4');
    imagettftext($image, $font_size, 0, $size / 2 - $size / 100, $size / 2 - $size / 100, $black, $font, '5');
    imagettftext($image, $font_size, 0, $size - $size / 4 - $size / 100, $size / 2 - $size / 100, $black, $font, '6');
    imagettftext($image, $font_size, 0, $size / 4 - $size / 100, $size - $size / 4 - $size / 100, $black, $font, '7');
    imagettftext($image, $font_size, 0, $size / 2 - $size / 100, $size - $size / 4 - $size / 100, $black, $font, '8');
    imagettftext($image, $font_size, 0, $size - $size / 4 - $size / 100, $size - $size / 4 - $size / 100, $black, $font, '9');

    header("Content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>
