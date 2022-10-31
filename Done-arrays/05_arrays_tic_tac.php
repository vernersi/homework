<?php
/*Exercise #5
See tic-tac-toe.php

Code an interactive, two-player game of Tic-Tac-Toe. You'll use a two-dimensional array of chars.

(...a game already in progress)

	X   O
	O X X
	  X O

'O', choose your location (row, column): 0 1

	X O O
	O X X
	  X O

'X', choose your location (row, column): 2 0

	X O O
	O X X
	X X O

The game is a tie.*/

$cells = [
    [' ', ' ', ' '],
    [' ', ' ', ' '],
    [' ', ' ', ' '],
];



//checks if there are still void spaces in game field and returns 0 if there is
function checkField($cells): int {
    $gameState = 1;
if (in_array(" ",$cells[0])===true ||
    in_array(" ",$cells[1])===true ||
    in_array(" ",$cells[2])===true){
    $gameState=0;
} return $gameState;
}

function checkWinner($cells) {
    //horizontal winners
    if ($cells[0][0]===$cells[0][1] && $cells[0][1]===$cells[0][2] && $cells[0][0]!==" ") {
        echo "Congratulations {$cells[0][0]} Won The Game!";
        exit;
        } elseif ($cells[1][0]===$cells[1][1] && $cells[1][1]===$cells[1][2] && $cells[1][0]!==" ") {
            echo "Congratulations {$cells[0][0]} Won The Game!";
            exit;
        }
        elseif ($cells[2][0]===$cells[2][1] && $cells[2][1]===$cells[2][2] && $cells[2][0]!==" ") {
            echo "Congratulations {$cells[0][0]} Won The Game!";
            exit;
    //vertical winners
        } elseif ($cells[0][0]===$cells[1][0] && $cells[1][0]===$cells[2][0] && $cells[0][0]!==" ") {
            echo "Congratulations {$cells[0][0]} Won The Game!";
            exit;
    }   elseif ($cells[0][1]===$cells[1][1] && $cells[1][1]===$cells[2][1] && $cells[0][1]!==" ") {
        echo "Congratulations {$cells[0][0]} Won The Game!";
        exit;
    }
    elseif ($cells[0][2]===$cells[1][2] && $cells[1][2]===$cells[2][2] && $cells[0][2]!==" ") {
        echo "Congratulations {$cells[0][0]} Won The Game!";
        exit;
    //diagonal winners
    } elseif ($cells[0][0]===$cells[1][1] && $cells[1][1]===$cells[2][2] && $cells[0][0]!==" ") {
        echo "Congratulations {$cells[0][0]} Won The Game!";
        exit;
    } elseif ($cells[0][2]===$cells[1][1] && $cells[1][1]===$cells[2][0] && $cells[0][2]!==" ") {
        echo "Congratulations {$cells[0][0]} Won The Game!";
        exit;
    }
}



while (checkField($cells) === 0) {
    //to get players which must make a move
    $X_count = 0;
    $O_count = 0;
    for ($i=0;$i<=2;$i++) {
        for ($j=0; $j<=2; $j++) {
            if ($cells[$i][$j]==="X") {
                $X_count++;
            } elseif ($cells[$i][$j]==="O") {
                $O_count++;
            }
        }
    }
    //for input rows&column in main cell array
    if ($X_count <= $O_count) {
        $input_cell = readline('`X` choose your location (row, column): ');
        $input_cell = explode(" ", $input_cell);
        $row=$input_cell[0];
        $column =$input_cell[1];
        $cells[$row][$column] = "X";
        checkWinner($cells);
        for ($i=0;$i<=2; $i++){
            for ($j=0; $j<=2; $j++){
                echo $cells[$i][$j];
            } echo PHP_EOL;
        }
    } else {
        $input_cell = readline('`O` choose your location (row, column): ');
        $input_cell = explode(" ", $input_cell);
        $row=$input_cell[0];
        $column =$input_cell[1];
        $cells[$row][$column] = "O";
        checkWinner($cells);
        for ($i=0;$i<=2; $i++){
            for ($j=0; $j<=2; $j++){
                echo $cells[$i][$j];
            } echo PHP_EOL;
        }
    }
}
