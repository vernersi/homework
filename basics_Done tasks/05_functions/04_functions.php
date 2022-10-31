<?php
/*
 * ###### Exercise 4

Create a array of objects that uses the function of exercise 3 but in loop printing out if the person has reached age of 18.
 */

class persons
{
    //member properties
    public $name;
    public $surname;
    public $age;

    //member methods
    public function checkAge() {
        if ($this->age >=18) {
            echo "old enough".PHP_EOL;
        }
    }
}

$Verners = new persons();
$Verners->name ="Verners";
$Verners->surname ="Ivanovskis";
$Verners->age =27;

$Janka = new persons();
$Janka->name ="Janis";
$Janka->surname ="Hardcore Code";
$Janka->age =99;

$Andrejs= new persons();
$Andrejs->name ="Andrejs";
$Andrejs->surname ="Kodetaajs";
$Andrejs->age =17;

$allPersons = array($Verners, $Janka, $Andrejs);

foreach ($allPersons as $person) {
    echo $person->name." is ";
    $person->checkAge();
}