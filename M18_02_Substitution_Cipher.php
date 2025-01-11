<?php
function substitutionCipher() {

    $input = trim(fgets(STDIN));
    $parts = explode(" ", $input);

    if (count($parts) < 2) {
        echo "Invalid input. Provide both a string and a shift number.\n";
        return;
    }

    $N = intval(array_pop($parts));
    $S = implode(" ", $parts);

    $shiftedText = "";
    for ($i = 0; $i < strlen($S); $i++) {
        $char = $S[$i];
        if (ctype_alpha($char)) {
            $base = ctype_upper($char) ? ord('A') : ord('a');
            $shiftedChar = chr((ord($char) - $base + $N) % 26 + $base);
            $shiftedText .= $shiftedChar;
        } else {
            $shiftedText .= $char;
        }
    }


    echo $shiftedText . "\n";
}


substitutionCipher();
