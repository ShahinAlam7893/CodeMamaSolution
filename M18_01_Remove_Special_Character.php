<?php
$firstString = trim(fgets(STDIN));


$newString = str_replace(array('.', '!', '@', '#', '$', '%', '^', '&', ',', '*', '(', ')', '/', '\'', '`', '~','"'), "", $firstString);

echo $newString;
