<?php
/*Exercise #9
Write a program that calculates and displays a person's body mass index (BMI). A person's BMI is calculated with the following formula:
BMI = weight x 703 / height ^ 2. Where weight is measured in pounds and height is measured in inches.
Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
If the BMI is less than 18.5, the person is considered underweight. If the BMI value is greater than 25, the person is considered overweight.

Your program must accept metric units.*/

 $weight =(float) readline('Insert your weight in kg :');
 echo PHP_EOL;
 $height = (float) readline('Insert your height in meters :');
echo PHP_EOL;

$weightToLbs =round($weight/0.45359237,2); //1 lb = 0.45359237 kg
$heightToInches = round($height/0.0254,2); //1″ = 0.0254 m
$BMI = $weightToLbs * 703 / pow($heightToInches,2);

if ($BMI >=18.5 && $BMI <=25) {
    echo "Your BMI is considered as optimal!".PHP_EOL;
} elseif ($BMI < 18.5) {
    echo "Your BMI is considered as underweight!".PHP_EOL;
} else {
    echo "Your BMI is considered as overweight!".PHP_EOL;
}
