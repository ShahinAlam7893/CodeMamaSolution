<?php
function squareRoot($N) {
    if ($N == 0 || $N == 1) {
        return $N; // Special cases
    }

    $low = 0;
    $high = $N;
    $result = 0;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        // Check if mid^2 is equal to N
        if ($mid * $mid == $N) {
            return $mid;
        }

        // If mid^2 is less than N, update result and search the right half
        if ($mid * $mid < $N) {
            $result = $mid;
            $low = $mid + 1;
        } else {
            // If mid^2 is greater than N, search the left half
            $high = $mid - 1;
        }
    }

    return $result;
}

// Input reading
$N = (int)trim(fgets(STDIN));

// Output the square root
echo squareRoot($N) . "\n";
?>
