<?php
function distance($x1, $x2, $y1, $y2)
{
    $distance = sqrt(pow($x2-$x1,2)+pow($y2-$y1,2));
    return number_format($distance, 2, '.', '');

}

fscanf(STDIN, "%f %f", $x1, $y1);
fscanf(STDIN, "%f %f", $x2, $y2);
echo "Distance: ".distance($x1, $x2, $y1,$y2).PHP_EOL;
