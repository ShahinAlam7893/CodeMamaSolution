<?php
function longestPalindrome($str)
{
    $n = strlen($str);
    if ($n == 0) return 0;

    $dp = array_fill(0, $n, array_fill(0, $n, false));
    $maxLength = 1;

    for ($i = 0; $i < $n; $i++) {
        $dp[$i][$i] = true;
    }

    for ($len = 2; $len <= $n; $len++) {
        for ($start = 0; $start < $n - $len + 1; $start++) {
            $end = $start + $len - 1;


            if ($str[$start] == $str[$end] && $len == 2) {
                $dp[$start][$end] = true;
            }

            elseif ($str[$start] == $str[$end] && $dp[$start + 1][$end - 1]) {
                $dp[$start][$end] = true;
            }


            if ($dp[$start][$end]) {
                $maxLength = max($maxLength, $len);
            }
        }
    }

    return $maxLength;
}


$N = intval(trim(fgets(STDIN)));
$str = trim(fgets(STDIN));

echo longestPalindrome($str) . "\n";


