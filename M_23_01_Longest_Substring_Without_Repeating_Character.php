<?php
function longestSubstring($s) {
    $n = strlen($s);
    $charIndexMap = [];
    $maxLength = 0;
    $start = 0;

    // Iterate through the string
    for ($end = 0; $end < $n; $end++) {
        // If the character is already in the map, update the start position
        if (isset($charIndexMap[$s[$end]])) {
            // Move the start pointer to the next position of the previous duplicate character
            $start = max($start, $charIndexMap[$s[$end]] + 1);
        }

        // Update the character's latest index in the map
        $charIndexMap[$s[$end]] = $end;

        // Calculate the maximum length of substring without repeating characters
        $maxLength = max($maxLength, $end - $start + 1);
    }

    return $maxLength;
}

$inputString = trim(fgets(STDIN));

// Call the function and display the result
echo longestSubstring($inputString) . "\n";

