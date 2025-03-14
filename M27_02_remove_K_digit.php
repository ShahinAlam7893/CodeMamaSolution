<?php
// Function to remove K digits to get the smallest possible number
function removeKDigits($N, $K) {
    $stack = []; // Stack to store digits

    foreach (str_split($N) as $digit) {
        // Remove larger digits from stack to make a smaller number
        while ($K > 0 && !empty($stack) && end($stack) > $digit) {
            array_pop($stack);
            $K--;
        }
        // Push the current digit onto the stack
        $stack[] = $digit;
    }

    // If K is still greater than 0, remove from the end
    while ($K > 0) {
        array_pop($stack);
        $K--;
    }

    // Convert the stack back into a string and remove leading zeros
    $result = ltrim(implode('', $stack), '0');

    // If result is empty (all digits removed), return "0"
    return $result === '' ? '0' : $result;
}

// Read number of test cases
$t = intval(trim(fgets(STDIN)));

while ($t--) {
    list($N, $K) = explode(' ', trim(fgets(STDIN)));
    echo removeKDigits($N, intval($K)) . "\n";
}
?>
