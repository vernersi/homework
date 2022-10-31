<?php
/*
04 - Loops

[BACK TO LIST](/exercises/basics)

There are multiple loop options, most common ones are for, foreach and while.  

Reference - https://www.w3schools.com/php/php_looping.asp

###### Exercise 4

Create a non associative array with integers and print out only integers that divides by 3 without any left.

*/

$numbers = [1,2,3,4,5,6,7,8,9,10,11,12];
foreach ($numbers as $value) {
    if ($value % 3 === 0) {
        echo $value.PHP_EOL;
    }
}
?>