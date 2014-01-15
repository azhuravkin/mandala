<?php
$im = imagecreate(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);
$red = imagecolorallocate($im, 200, 0, 0);
drawArrow($im, 20, 20, 180, 180, $red, 10); // $x1, $y1, $x2, $y2, $color, $width

function drawArrow(&$im, $x1, $y1, $x2, $y2, $color, $width = 10) {
    $dx = $x2 - $x1;
    $dy = $y2 - $y1;
    $length = sqrt($dx * $dx + $dy * $dy);
    $w2 = $width * 2;
    $coords = array(0, 0, -$w2, -$w2, -$w2, -$width, -$length, -$width, -$length, $width, -$w2, $width, -$w2, $w2); // x1, y1, x2, y2,...
    $angle = atan2($dy, $dx);
    for ($i = 0; $i < count($coords); $i+=2) {
        $x = $coords[$i];
        $y = $coords[$i + 1];
        $coords[$i]   = $x2 + ($x * cos($angle) + $y * sin($angle));
        $coords[$i+1] = $y2 + ($x * sin($angle) - $y * cos($angle));
    }

    imagefilledpolygon($im, $coords, count($coords) >> 1, $color);
}

    header("Content-type: image/png");
    imagepng($im);
    imagedestroy($im);

?>
