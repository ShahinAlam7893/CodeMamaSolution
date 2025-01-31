<?php

fscanf(STDIN, "%d %d", $num1, $num2);

function swap($num1,$num2,$temp=0){
    echo "Before swapping: num1 = $num1, num2 = $num2\n";
    $temp= $num1;
    $num1= $num2;
    $num2= $temp;

    echo "After swapping: num1 = $num1, num2 = $num2";


}

swap($num1,$num2,$temp=0);
