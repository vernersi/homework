<?php
/*
 * ###### Exercise 2

Create a function that accepts 2 integer arguments. First argument is a base value and the second one is a value its been multiplied by.
For example, given argument 10 and 5 prints out 50
 */
function multiply (int $baseNumber, int $multiplier) {
    return $baseNumber*$multiplier;
}
echo multiply(2,3).PHP_EOL;