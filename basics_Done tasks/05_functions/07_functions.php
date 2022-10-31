<?php
/*
 * ###### Exercise 7**

Imagine you own a gun store.
Only certain guns can be purchased with license types.
Create an object (person) that will be the requester to purchase a gun (object)
Person object has a name, valid licenses (multiple) & cash.
Guns are objects stored within an array.
Each gun has license letter, price & name.
Using PHP in-built functions determine if the requester (person) can buy a gun from the store.
 */

$person = new stdClass();
$person->name = 'Ivars';
$person->licenses = ['A', 'B'];
$person->money = 900;

$weapons = [
    createWeapon('Pistol', 'A', 300),
    createWeapon('AK47', 'B', 1000),
    createWeapon('knife', 'C', 450),
];

function createWeapon($name, $license, $price) {
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->license = $license;
    $weapon->price = $price;
    return $weapon;
}



$licensesText = implode(',',$person->licenses);
echo "Welcome, {$person->name} ({$person->money}$) Licenses:[{$licensesText}]";
echo PHP_EOL;
echo PHP_EOL;

foreach ($weapons as $key=>$weapon) {
    $sequence = $key + 1;
    echo "Select |{$sequence}| for {$weapon->name} ({$weapon->price}$) [{$weapon->license}]".PHP_EOL;
}
    $selection = (int)readline('Enter weapon to purchase: '); //(int) ir typecasts kuru sagaida
    $selectedWeapon = $weapons[$selection-1];

if ($selectedWeapon === null){
    echo 'Invalid selection';
    exit;
}

if ($person->money < $selectedWeapon->price) {
    echo 'Not enough money!';
    echo PHP_EOL;
    echo PHP_EOL;
    exit;
}

 if(! in_array($selectedWeapon->license, $person->licenses)){
     echo 'Invalid license';
     echo PHP_EOL;
     echo PHP_EOL;
     exit;
 }
 $person->money -= $selectedWeapon->price;
 echo "Thank you for purchasing";
 echo PHP_EOL;
 echo PHP_EOL;


