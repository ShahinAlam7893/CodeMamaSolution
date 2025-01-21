<?php

function CountLoneZeros($number)
{
    $count = 0;
    $number = (string)$number;
    for($i = 0; $i < strlen($number); $i++){
        if (($i == 0 || $number[$i - 1] != '0') &&
            $number[$i] == '0' &&
            ($i == strlen($number) - 1 || $number[$i + 1] != '0')) {
            $count++;
        }

    }
    return $count;
}
$number = trim(fgets(STDIN));

echo CountLoneZeros($number);