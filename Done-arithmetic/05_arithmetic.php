<?php
/*# Exercise #5

Write a program that picks a random number from 1-100. Give the user a chance to guess it.
If they get it right, tell them so. If their guess is higher than the number, say "Too high."
If their guess is lower than the number, say "Too low." Then quit. (They don't get any more guesses for now.)

```
I'm thinking of a number between 1-100.  Try to guess it.
> 13

Sorry, you are too low.  I was thinking of 34.
```

```
I'm thinking of a number between 1-100.  Try to guess it.
> 79

Sorry, you are too high.  I was thinking of 51.
```

```
I'm thinking of a number between 1-100.  Try to guess it.
> 42

You guessed it!  What are the odds?!?
```*/

$randomNum = rand(1,100);
$guessNum =(int) readline("I'm thinking of a number between 1-100.  Try to guess it.");
echo PHP_EOL;
if ($randomNum === $guessNum) {
    echo "Jopcik, you guessed it!  What are the odds?!?".PHP_EOL;
} else { if ($guessNum > $randomNum){
    echo "Sorry, you are too high.  I was thinking of {$randomNum}".PHP_EOL;
} else {
    echo "Sorry, you are too low.  I was thinking of {$randomNum}".PHP_EOL;
}
}
