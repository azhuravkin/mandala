<?php
    $size = 800;

    $image = imagecreate($size, $size);

    $white = imagecolorallocate($image, 255, 255, 255);
    $black = imagecolorallocate($image, 0, 0, 0);
    $red = imagecolorallocate($image, 255, 0, 0);

    imageellipse($image, $size / 2, $size / 2, $size, $size, $black);

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

    header("Content-type: image/png");
    imagepng($image);
    imagedestroy($image);
?>
