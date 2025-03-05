<?php

function isProfitableGamble($prob, $prize, $pay) {
    return ($prob * $prize > $pay) ? "true" : "false";
}

fscanf(STDIN, "%f %d %d", $prob, $prize, $pay);

echo isProfitableGamble($prob, $prize, $pay) . PHP_EOL;
?>
