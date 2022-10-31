###### Exercise 1

Given variables (int) 10, string "10" determine if they both are the same.
<?php 
$integer = 10;
$text = "10";
if ($integer===$text)
 echo "Same";
 else echo "Not same".PHP_EOL
?>
###### Exercise 2

Given variable (int) 50, determine if its in the range of 1 and 100.
<?php
$number  = 50;
if ($number >=1 && $number <=100)
echo "witihin the range \n";
    else echo" not in range".PHP_EOL;

?>
###### Exercise 3

Given variables (string) "hello" create a condition that if the given value is "hello" then output "world".

<?php 

$stringHello = "hello";
if ($stringHello === "hello")
    echo "world".PHP_EOL;

?>



###### Exercise 4

By your choice, create condition with 3 checks.  
For example, if value is greater than X, less than Y and is an even number.


<?php 


$numberToCheck = 40;
$x = 30;
$y = 51;

if ($numberToCheck > x && $numberToCheck < $y && $numberToCheck%2==0)
    echo "all three conditions are met".PHP_EOL;




?>


###### Exercise 5

Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.  
Range should be stored within the 2 separated variables $y and $z.
<?php
$num = 50;
$y = 55;
$z = 40;

if ($num > $z && $num < $y)
    echo "correct".PHP_EOL;

?>

###### Exercise 6

Create a variable $plateNumber that stores your car plate number.
Create a switch statement that prints out that its your car in case of your number.

<?php
$plateNumber = "MC1277";
    switch ($plateNumber) {
        case "MC1276":
            echo "Das ist your plate".PHP_EOL;
            break;
        default:
            echo "NOT YOUR PLATE".PHP_EOL;
    }



?>

###### Exercise 7

Create a variable $number with integer by your choice.
Create a switch statement that prints out text "low" if the value is under 50,
"medium" if the case is higher than 50 but lower than 100, "high" if the value is >100.

<?php
$number = 50;
switch ($number) {
    case $number>=100;
        echo "high".PHP_EOL;
        break;
    case $number >=50;
        echo "medium".PHP_EOL;
        break;
    case $number <50;
        echo "low".PHP_EOL;
        break;
}
