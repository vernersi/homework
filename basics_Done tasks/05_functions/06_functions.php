<?php
/*
 * ###### Exercise 6

Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
Create a for loop that iterates non-associative array using php in-built function that determines count of elements in the array.
Create a function that doubles the integer number.
Within the loop using php in-built function print out the double of the number value (using your custom function).
 */

$numbers =[1,1.5,2,"3",4];
for ($x=0; $x<=count($numbers)-1;$x++) {
    echo doubleUp($numbers[$x]).PHP_EOL;
}

function doubleUp ($x) {
    if (is_int($x) === true) {
        return $x*2;
    }
}

?>