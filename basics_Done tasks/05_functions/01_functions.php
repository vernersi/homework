<?php
/*
 * ###### Exercise 1

Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
Print this value out.
 */

function addCodelex (string $str): string
{
    return $str."codelex";
}
    echo addCodelex("It is ").PHP_EOL;
