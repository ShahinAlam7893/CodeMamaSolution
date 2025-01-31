<?php

$myYear = trim(fgets(STDIN));

if ($myYear%4 == 0 && $myYear % 100 != 0 ) {
    echo "$myYear is a leap year.";
}

elseif ($myYear%400 == 0){
    echo "$myYear is a leap year.";
}
else{
    echo "$myYear is not a leap year.";
}

