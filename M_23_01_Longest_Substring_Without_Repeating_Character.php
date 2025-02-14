<?php
function longestSubstring($s) {
    $n = strlen($s);
    $charIndexMap = [];
    $maxLength = 0;
    $start = 0;


    for ($end = 0; $end < $n; $end++) {

        if (isset($charIndexMap[$s[$end]])) {
            $start = max($start, $charIndexMap[$s[$end]] + 1);
        }

        $charIndexMap[$s[$end]] = $end;

        $maxLength = max($maxLength, $end - $start + 1);
    }

    return $maxLength;
}

$inputString = trim(fgets(STDIN));

echo longestSubstring($inputString) . "\n";

