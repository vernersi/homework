<?php
/*
 * ###### Exercise 3

Create a person object with name, surname and age. Create a function that will determine if the person has reached 18 years of age.
Print out if the person has reached age of 18 or not.
 */
class person {
//member properties
    public $name;
    public $surname;
    public $age;
//member methods
    function checkAge() {
        if ($this->age >=18) {
            echo "person old".PHP_EOL;
        }
    }
    }

    $Verners = new person();
    $Verners->name ="Verners";
    $Verners->surname ="Ivanovskis";
    $Verners->age =27;

    echo $Verners->checkAge();

