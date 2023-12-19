<?php

$squre = function ($num) {
    return $num * $num;
};

$number = 14;

$expression = 'The squre of ' . $number . ' is ' . $squre($number);

echo $expression;

?>
