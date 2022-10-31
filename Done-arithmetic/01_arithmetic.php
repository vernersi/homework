<?php
/* Exercise #1

Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.*/

$first = (int)readline("Please insert first integer:");
echo PHP_EOL;
$second = (int)readline("Please insert second integer:");
echo PHP_EOL;


echo ($first === 15 ||
    $second === 15 ||
    $first + $second === 15 ||
    $first - $second === abs(15)
) ? 'True' : 'False';
echo PHP_EOL;