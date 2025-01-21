<?php

function quotient()
{
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));

     $result = $a/$b;
    echo (int) $result;
}

quotient();