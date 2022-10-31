<?php
/*# Exercise #4

Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as n int.
Take note that it is the same as factorial of N.*/

$n = (int)  10;
$product=1;
for ($i=1; $i<=$n; $i++) {
    $product*=$i;
}
echo "Product of given number is: {$product}";
echo PHP_EOL;