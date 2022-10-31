<?php

/*
04 - Loops

[BACK TO LIST](/exercises/basics)

There are multiple loop options, most common ones are for, foreach and while.  

Reference - https://www.w3schools.com/php/php_looping.asp  



###### Exercise 3

Given variable $x = 1 while $x is lower than 10, print out text "codelex". (Note: To avoid infinite looping, after each print increase the variable $x by 1)

*/
 $x = 1;
 while ($x<10) {
     echo "codelex".PHP_EOL;
     $x++;
 }
