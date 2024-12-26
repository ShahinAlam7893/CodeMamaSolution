<?php
function searchRotatedArray($N, $M, $P) {
    $low = 0;
    $high = $N - 1;

    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        // Check if the middle element is the target
        if ($M[$mid] == $P) {
            return $mid;
        }

        // Determine which half is sorted
        if ($M[$low] <= $M[$mid]) {
            // Left half is sorted
            if ($M[$low] <= $P && $P < $M[$mid]) {
                $high = $mid - 1; // Target is in the left half
            } else {
                $low = $mid + 1; // Target is in the right half
            }
        } else {
            // Right half is sorted
            if ($M[$mid] < $P && $P <= $M[$high]) {
                $low = $mid + 1; // Target is in the right half
            } else {
                $high = $mid - 1; // Target is in the left half
            }
        }
    }

    // Target not found
    return "Element not found";
}

// Input reading
$N = (int)trim(fgets(STDIN)); // Size of the array
$M = array_map('intval', explode(' ', trim(fgets(STDIN)))); // Array elements
$P = (int)trim(fgets(STDIN)); // Target value

// Perform the search and print the result
$result = searchRotatedArray($N, $M, $P);
echo $result . "\n";
?>
