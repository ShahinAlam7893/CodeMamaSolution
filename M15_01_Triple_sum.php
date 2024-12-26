<?php

$n = intval(fgets(STDIN));
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));
$p = intval(fgets(STDIN));

function triple_sum($arr, $n, $p) {

    sort($arr);

    for ($i = 0; $i < $n - 2; $i++) {
        $left = $i + 1;
        $right = $n - 1;

        while ($left < $right) {
            $sum = $arr[$i] + $arr[$left] + $arr[$right];

            if ($sum == $p) {
                echo $arr[$i] . " " . $arr[$left] . " " . $arr[$right] . PHP_EOL;
                return;
            } elseif ($sum < $p) {
                $left++;
            } else {
                $right--;
            }
        }
    }
    echo "No triplet sum\n";
}
triple_sum($arr, $n, $p);
