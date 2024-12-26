<?php

function isSumOddOrEven($number) {

    $number = abs($number);
    $sum = 0;

    while ($number > 0) {
        $sum += $number % 10;
        $number = floor($number/10);
    }

    return ($sum % 2 == 0) ? "Even" : "Odd";
}

$N = trim(fgets(STDIN));

if (is_numeric($N)) {
    echo isSumOddOrEven((int)$N) . PHP_EOL;
} else {
    echo "Invalid input. Please enter a valid number." . PHP_EOL;
}
?>
