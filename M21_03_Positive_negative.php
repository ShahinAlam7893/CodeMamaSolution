<?php

$myNumber = trim(fgets(STDIN));

if ($myNumber <0) {
    echo "$myNumber is a negative number.\n";
}elseif ($myNumber > 0) {
    echo "$myNumber is a positive number.\n";
}else{
    echo "The number is zero.\n";
}
