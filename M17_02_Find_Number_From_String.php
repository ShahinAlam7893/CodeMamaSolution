<?php

$text = fgets(STDIN);

$number = preg_replace('/[^0-9]/', '', $text);

echo $number;


