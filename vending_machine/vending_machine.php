<?php
$vendingMachine = [
    createItem('Snickers', '0', 1.57),
    createItem('Mars', '1', 1.43),
    createItem('CocaCola', '2', 0.87),
    createItem('Tarhuns', '3', 0.74),
    createItem('knife', '4', 5.32),
];
function createItem($name, $ID, $price):stdClass {
    $item = new stdClass();
    $item->name = $name;
    $item->id = $ID;
    $item->price = $price;
    return $item;
}

function displayItems($vendingMachine) {
    foreach ($vendingMachine as $key => $item){
        echo $item->name." Price: [{$item->price}]$"." [{$item->id}]".PHP_EOL;
    }
}
//shows the balance of money |values => amount left| in vending machine
$vendingBalance = [1 =>3, 2=>4, 5=>2, 10=>5, 20=>3, 50=>2, 100=>4, 200=>0, 500=>0, 1000=>0, 2000=>0, 5000=>0, 10000=>0];


echo "Welcome! This is Vendinator 3000!".PHP_EOL;
displayItems($vendingMachine);
$itemSelect = readline("Enter the code of the item you wish to purchase : ");
echo PHP_EOL;
$itemPrice = $vendingMachine[$itemSelect]->price;
echo "You have to pay {$itemPrice} $".PHP_EOL;
$moneyInserted=0;
$paid = 1; //indicates if item was paid or not paid=>1 not paid = 0;

//loop for money user input
while ($moneyInserted<$itemPrice*100) {
    echo ($moneyInserted/100)." $\n";
    $nominal = (int)readline("Select the nominal of input money : ");
    echo PHP_EOL;
    if (!in_array($nominal, array_keys($vendingBalance))) {
        echo "Wrong nominal input!" . PHP_EOL;
    } else {
        $moneyInserted += $nominal;
        $vendingBalance[$nominal] +=1;
    }
}

$remainder = $moneyInserted - ($itemPrice*100); //remainder in cents
$remainderInfo = 'Here is your '; //remainder given to customer in text form
$revBalance = array_reverse($vendingBalance, true);
echo "We must give you back : ".($remainder/100)." $".PHP_EOL;

while ($remainder>0) {
    foreach (array_keys($revBalance) as $key) {
       if (intdiv($remainder, $key) > 0 && $vendingBalance[$key] >= intdiv($remainder, $key)) {
            $times = intdiv($remainder, $key);
            $remainder -= $times * $key;
            $vendingBalance[$key]-=$times;
            $valueInDollars =($key / 100)." $, ";
            $givenCoin = str_repeat("$valueInDollars", "$times");
            //var_dump($givenCoin);
            $remainderInfo .= $givenCoin;
       }
}
   if ($remainder>0) {
       echo "Sorry, Vendinator broken! (no change could be given. Take back your money!".PHP_EOL;
       $remainder=$moneyInserted;
       $paid=0;
   }
}

echo $remainderInfo;
echo PHP_EOL;
echo ($paid!=0)? "Here is your ".$vendingMachine[$itemSelect]->name.PHP_EOL:"Sorry for inconvenience!";


