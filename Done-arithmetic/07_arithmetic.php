<?php
/*# Exercise #7

Modify the example program to compute the position of an object after falling for 10 seconds, outputting the position in
meters. The formula in Math notation is:

[Gravity formula](./gravity-formula.png)

x(t) = 0.5 * at^2 + Vit + Xi
a= 9.81 m/s^2
t= 10s
Vi = 0
Xi = 0

*Note:* The correct value is -490.5m.*/

$a = -9.81; //acceleration
$t= 10; //time
$initialVelocity = 0;
$initialPos = 0;

$objectPos = 0.5 * $a * pow($t,2) + $initialVelocity +$initialPos;

echo "The position of an object after falling for 10 seconds is {$objectPos}".PHP_EOL;

