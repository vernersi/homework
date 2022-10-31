<?php
/*
 04 - Loops

[BACK TO LIST](/exercises/basics)

There are multiple loop options, most common ones are for, foreach and while.  

Reference - https://www.w3schools.com/php/php_looping.asp  


###### Exercise 2

Create an array with integers (up to 10) and print them out using for loop.
*/

$numbers =[1,2,3,4,5,6,7,8,9,10];
for ($i=0; $i <=count($numbers)-1;$i++)
    echo $numbers[$i].PHP_EOL;
?>
