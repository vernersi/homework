<?php
/*Exercise #3
Write a program that reads an positive integer and count the number of digits the number has.*/
$number = readline ('Enter positive integer : ');
echo PHP_EOL;
function count_digit($number) {
    return strlen($number);
}
echo count_digit($number);
echo PHP_EOL;
