<?php
/*Exercise #5
On your phone keypad, the alphabets are mapped to digits as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).

Write a program called PhoneKeyPad, which prompts user for a String (case insensitive), and converts to a sequence of keypad digits.

Use:

a "nested-if" statement
a "switch-case-default" statement
Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,*/

$string = readline('Insert string : ');
echo PHP_EOL;
$string_upper = strtoupper($string);
$letters=str_split($string_upper);
$digits = "";
foreach ($letters as $letter) {
    if ($letter === 'A' || $letter === 'B' || $letter === 'C') {
        switch ($letter) {
            case 'A':
                $digits .= '2';
                break;
            case 'B':
                $digits .= '22';
                break;
            case 'C':
                $digits .= '222';
                break;
            default:
                break;
        }
    } elseif ($letter === 'D' || $letter === 'E' || $letter === 'F') {
        switch ($letter) {
            case 'D':
                $digits .= '3';
                break;
            case 'E':
                $digits .= '33';
                break;
            case 'F':
                $digits .= '333';
                break;
            default:
                break;
        }
    } elseif ($letter === 'G' || $letter === 'H' || $letter === 'I') {
        switch ($letter) {
            case 'G':
                $digits .= '4';
                break;
            case 'H':
                $digits .= '44';
                break;
            case 'I':
                $digits .= '444';
                break;
            default:
                break;
        }
    } elseif ($letter === 'J' || $letter === 'K' || $letter === 'L') {
        switch ($letter) {
            case 'J':
                $digits .= '5';
                break;
            case 'K':
                $digits .= '55';
                break;
            case 'L':
                $digits .= '555';
                break;
            default:
                break;
        }
    } elseif ($letter === 'M' || $letter === 'N' || $letter === 'O') {
        switch ($letter) {
            case 'M':
                $digits .= '6';
                break;
            case 'N':
                $digits .= '66';
                break;
            case 'O':
                $digits .= '666';
                break;
            default:
                break;
        }
    } elseif ($letter === 'P' || $letter === 'Q' || $letter === 'R' || $letters==='S') {
        switch ($letter) {
            case 'P':
                $digits .= '7';
                break;
            case 'Q':
                $digits .= '77';
                break;
            case 'R':
                $digits .= '777';
                break;
            case 'S':
                $digits .= '7777';
                break;
            default:
                break;
        }
    } elseif ($letter === 'T' || $letter === 'U' || $letter === 'V') {
        switch ($letter) {
            case 'T':
                $digits .= '8';
                break;
            case 'U':
                $digits .= '88';
                break;
            case 'V':
                $digits .= '888';
                break;
            default:
                break;
        }
    } elseif ($letter === 'W' || $letter === 'X' || $letter === 'Y' || $letter === 'Z') {
        switch ($letter) {
            case 'W':
                $digits .= '9';
                break;
            case 'X':
                $digits .= '99';
                break;
            case 'Y':
                $digits .= '999';
                break;
            case 'Z':
                $digits .= '9999';
                break;
            default:
                break;
        }
    }


}
echo $digits.PHP_EOL;