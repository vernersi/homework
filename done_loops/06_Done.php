<?php
/*Exercise #6
Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.

////////////////\\\\\\\\\\\\\\\\
////////////********\\\\\\\\\\\\
////////****************\\\\\\\\
////************************\\\\
********************************
Then, modify your program using an integer class constant so that it can create a similar figure of any size. For instance, the diagram above has a size of 5. For example, the figure below has a size of 3:

////////\\\\\\\\
////********\\\\
****************
And the figure below has a size of 7:

////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\
////////////////////********\\\\\\\\\\\\\\\\\\\\
////////////////****************\\\\\\\\\\\\\\\\
////////////************************\\\\\\\\\\\\
////////********************************\\\\\\\\
////****************************************\\\\
*************************************************
 */

//NOT YET FINISHED
class AsciiFigure {
public int $size = 4;



    static function draw() {
        for ($i=0; $i<=5; $i++){
            $n=30;
            $charOne = str_repeat('/', $i);
            echo PHP_EOL;
            $charTwo ='\\';
            echo PHP_EOL;
            $n-=strlen($charOne)+strlen($charTwo);
            echo $charOne;
            for ($i=$n; $i>0; $i--) {
                echo "*";
            }
            echo $charTwo;
        }
    }
}
AsciiFigure::draw();