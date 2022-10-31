<?php
/*Write a program to play a word-guessing game like Hangman.

It must randomly choose a word from a list of words.
It must stop when all the letters are guessed.
It must give them limited tries and stop after they run out.
It must display letters they have already guessed (either only the incorrect guesses or all guesses).*/


$words = ['koks', 'gredzens', 'pulkstens', 'doma', 'atvilktne'];
$rand_word = $words[array_rand($words, 1)];
$wordLetters = str_split($rand_word);
$correctWord = str_split(str_repeat('_', strlen($rand_word)));


$maxGuesses = 3;
$guesses = 0;
$guessedLetters = '';



while ($guesses < $maxGuesses && in_array("_", $correctWord)) {
    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-" . PHP_EOL;
    $guessesLeft = $maxGuesses - $guesses;
    echo "Guess the word: " . implode($correctWord) . PHP_EOL;
    echo "Guesses left: " . $guessesLeft . PHP_EOL;
    echo 'Misses :' . $guessedLetters . PHP_EOL;
    $guessLetter = readline('Enter a letter: ');
    $letterPosition = array_keys($wordLetters, $guessLetter);

    if (count($letterPosition) > 0) {
        foreach ($letterPosition as $position) {
            $correctWord[$position] = $guessLetter;
        }
    } else {
        $guesses++;
        $guessedLetters .= $guessLetter;
        echo 'Misses :' . $guessedLetters . PHP_EOL;
    }
    echo implode('', $correctWord);
    echo PHP_EOL;
}


$guessArr = [];
$letterKeys = array_keys($wordLetters, strtolower($guessLetter));
echo in_array('-', $correctWord) ? 'You Lose!' . PHP_EOL : 'Nice!' . PHP_EOL;



?>
