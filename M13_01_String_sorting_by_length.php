<?php

function sortByLength($N, $M)
{
    // Check if inputs are valid
    if ($N == 0 || empty($M)) {
        return [];
    }

    // Sort the array by the length of each string
    usort($M, function ($a, $b) {
        return strlen($a) - strlen($b);
    });

    return $M;
}

// Read inputs
$N = (int)(fgets(STDIN)); // Number of elements in the array
$M = explode(' ', trim(fgets(STDIN))); // Array of strings

// Call the function and print the result
$result = sortByLength($N, $M);

// Output the sorted array
echo implode(' ', $result) . PHP_EOL;
