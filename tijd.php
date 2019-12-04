<?php

$string = readline();
$find = 's';
$pos = strpos($string, $find);

if ($pos === false) {
    echo "geen tijd gevonden";
} else {
    echo "$string seconds";
}