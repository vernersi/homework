
<?php
/*###### Exercise 5

Given array
    ```php*/
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];
echo $items[0][1]["name"]." & ".$items[0][0]["name"]." ".$items[0][1]["surname"]."`s".PHP_EOL;
//Program should display concatenated value of - John & Jane Doe`s

?>





