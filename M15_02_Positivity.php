<?php
// Read input for the size of the array
fscanf(STDIN, "%d", $N);

// Read the array elements
$input = trim(fgets(STDIN));
$M = array_map('intval', explode(' ', $input));

// Initialize sets for unique positive and negative values
$positiveSet = [];
$negativeSet = [];

foreach ($M as $value) {
    if ($value > 0) {
        $positiveSet[$value] = true;
    } elseif ($value < 0) {
        $negativeSet[$value] = true;
    } elseif ($value === 0) {
        $positiveSet[0] = true; // Count 0 as positive
    }
}

// Compare the counts of unique positive and negative values
$positiveCount = count($positiveSet);
$negativeCount = count($negativeSet);

if ($positiveCount > $negativeCount) {
    echo "Positivity" . PHP_EOL;
} else {
    echo "Negativity" . PHP_EOL;
}
