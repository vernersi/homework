<?php
/*Exercise #3
Write a program that asks the user to enter two words. The program then prints out both words on one line. The words will be separated by enough dots so that the total line length is 30:

Enter first word:
turtle
Enter second word
153
turtle....................153
This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.*/
$n=30;
$wordOne = readline ('Enter first word :');
echo PHP_EOL;
$wordTwo = readline ('Enter first word :');
echo PHP_EOL;
$n-=strlen($wordOne)+strlen($wordTwo);
echo $wordOne;
for ($i=$n; $i>0; $i--) {
    echo ".";
}
echo $wordTwo;
