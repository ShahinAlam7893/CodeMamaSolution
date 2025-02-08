<?php
// Function to generate permutations of a string
function permute($str)
{
    $result = [];
    $arr = str_split($str);


    function generate($arr, $start, $end, &$result)
    {
        if ($start == $end) {
            $result[] = implode("", $arr);
        } else {
            for ($i = $start; $i <= $end; $i++) {

                list($arr[$start], $arr[$i]) = array($arr[$i], $arr[$start]);


                generate($arr, $start + 1, $end, $result);


                list($arr[$start], $arr[$i]) = array($arr[$i], $arr[$start]);
            }
        }
    }


    generate($arr, 0, count($arr) - 1, $result);


    sort($result);


    return implode(" ", $result);
}


$input = trim(fgets(STDIN));


echo permute($input) . "\n";



