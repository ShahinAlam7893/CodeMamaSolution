<?php
function findMin($N, $M) {
    if ($N == 0) return null; // If array is empty
    
    $low = 0;
    $high = $N - 1;
    
    while ($low < $high) {
        $mid = floor(($low + $high) / 2);
        
        // If middle element is greater than the rightmost element,
        // the minimum is in the right half.
        if ($M[$mid] > $M[$high]) {
            $low = $mid + 1;
        } else {
            // Otherwise, the minimum is in the left half.
            $high = $mid;
        }
    }
    
    // When low == high, we have found the minimum element
    return $M[$low];
}

// Input reading
$N = (int)trim(fgets(STDIN));  // Size of the array
$M = array_map('intval', explode(' ', trim(fgets(STDIN)))); // Array elements

// Find and print the minimum value in the rotated sorted array
echo findMin($N, $M) . "\n";
?>
