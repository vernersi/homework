
<?php
/* 1. masiivs ar vaardiem,
    2.
speele kuraa jauzmin vaards;
*/

$words = ['koks', 'vulcano', 'earthquake', 'kalns', 'debesis'];
    $rand_word = $words[array_rand($words, 1)];
    $wordLetters= str_split($rand_word);
    $correctWord = str_split(str_repeat('-', strlen($rand_word)));

echo "Guess the word: ".implode($correctWord).PHP_EOL;
$maxGuesses = 3;
$guesses =0;


while ($guesses<=$maxGuesses && in_array("-",$correctWord)) {
    $guessLetter = readline('Enter a letter: ');
    $letterPosition = array_keys($wordLetters, $guessLetter);

    if (count($letterPosition)>0) {
        foreach ($letterPosition as $position) {
            $correctWord[$position] = $guessLetter;
        }
    } else {
        $guesses++;
    }
    echo implode ('',$correctWord);
    echo PHP_EOL;
}


$guessArr = [];
   $letterKeys = array_keys($wordLetters, strtolower($guessLetter));
    echo in_array('-', $correctWord) ? 'You Lose!' : 'Nice!'




?>



