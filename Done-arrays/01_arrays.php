<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: ".implode(", ",$numbers).PHP_EOL;

//todo
$sorted_numbers = $numbers;
sort($sorted_numbers);
echo "Sorted numeric array: ".implode(", ",$sorted_numbers).PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: ".implode(", ",$words).PHP_EOL;

//todo
$sorted_words=$words;
sort($sorted_words);
echo "Sorted string array: ".implode(", ", $sorted_words).PHP_EOL;