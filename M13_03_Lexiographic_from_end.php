<?php

// Function to return the lexicographically first rearrangement
function lexicographicallyFirst($S) {
    // Convert the string into an array of characters
    $chars = str_split($S);

    // Sort the array of characters
    rsort($chars);


    // Join the sorted array back into a string
    return implode('', $chars);
}

// Input: Reading a string from the user
$S = trim(fgets(STDIN));

// Output: Print the lexicographically first rearranged string
echo lexicographicallyFirst($S) . PHP_EOL;
