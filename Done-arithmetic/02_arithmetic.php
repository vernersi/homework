<?php
/*# Exercise #2

Write a program called CheckOddEven which prints "Odd Number" if the int variable “number” is odd,
or “Even Number” otherwise. The program shall always print “bye!” before exiting.*/

$number = (int)10;

function CheckOddEven($number)
{
    echo ($number % 2 === 0) ? "Even number" : "Odd number";
    echo PHP_EOL;
}

CheckOddEven($number);
echo 'bye!';
echo PHP_EOL;
exit;