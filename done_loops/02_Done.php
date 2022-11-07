<?php

$i = readline('Input number');
echo PHP_EOL;
$n = readline('Input number of times i must be multiplied');
echo PHP_EOL;

while ($i!=1){
    $n*=$n;
    $i--;
}

echo $n;
//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function