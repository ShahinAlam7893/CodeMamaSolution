<?php

$n = intval(fgets(STDIN));

function sumOfNaturalNumbers($n){
    $sum = 0;
    for ($i =1; $i<=$n; $i++){
        $sum += $i;
    }
    return $sum;
}

echo sumOfNaturalNumbers($n);

