<?php
/*
# 04 - Loops

[BACK TO LIST](/exercises/basics)

There are multiple loop options, most common ones are for, foreach and while.  

Reference - https://www.w3schools.com/php/php_looping.asp  

###### Exercise 5

Create an associative array with objects of multiple persons.  
Each person should have a name, surname, age and birthday. Using loop (by your choice) print out every persons personal data.
*/

$users = [
    [
        "name"=> "Verners",
        "surname"=>"Ivanovskis",
        "age" => 27,
        "birthday" => "14.06.1995"
    ],
    [
        "name"=> "Janis",
        "surname"=>"Janchiks",
        "age" => 99,
        "birthday" => "14.06.1999"
    ],
    [
        "name" => "John",
        "surname" => "Doe",
        "age" => 50,
        "birthday" => "14.06.1422"
    ]
];
$i=1;
foreach ($users as $person) {
    echo "User number $i name is: ".$person["name"].PHP_EOL;
    echo "User number $i surnname is: ".$person["surname"].PHP_EOL;
    echo "User number $i age is: ".$person["age"].PHP_EOL;
    echo "User number $i birthday is: ".$person["birthday"].PHP_EOL;
    $i++;
}
