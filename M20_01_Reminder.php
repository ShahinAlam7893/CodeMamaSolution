<?php

function reminder()
{
    $num1 = trim(fgets(STDIN));
    $num2 = trim(fgets(STDIN));
    $mod = $num1 % $num2;
    echo $mod;
}

reminder();

