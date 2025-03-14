<?php

function isRepdigit($n) {

    $num_str = (string)$n;
    $first_digit = $num_str[0];


    for ($i = 1; $i < strlen($num_str); $i++) {
        if ($num_str[$i] !== $first_digit) {
            return false;
        }
    }
    return true;
}
$N = trim(fgets(STDIN));
if (isRepdigit($N)) {
    echo "true\n";
} else {
    echo "false\n";
}
?>
