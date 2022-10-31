<?php
/*Summary
An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
For every hour over 40, they get overtime = (base pay) × 1.5.
The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
If the number of hours is greater than 60, print an error message.
Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.
Write a main method that calls this method for each of these employees:

Employee	Base Pay	Hours Worked
Employee 1	 $7.50	        35
Employee 2	 $8.20	        47
Employee 3	 $10.00	        73
*/


function addEmployee(string $name, float $basePay, int $hrsWorked)
{
    $employee=new stdClass();
    $employee->name=$name;
    $employee->basePay=$basePay;
    $employee->hrsWorked=$hrsWorked;
    return $employee;
}

$employees =(array) [
    addEmployee("Employee 1", 7.50, 35),
    addEmployee("Employee 2", 8.20, 47),
    addEmployee("Employee 3", 10.00, 73)
];

function employeeSalary(array $employees) {
    for ($i=0; $i<=sizeof($employees)-1;$i++) {
        if ($employees[$i]->basePay<8.00) {
            echo "Error - {$employees[$i]->name} base pay is less than 8.00$".PHP_EOL;
        } elseif
            ($employees[$i]->hrsWorked>60) {
            echo "Error - {$employees[$i]->name} hours worked is more than 60".PHP_EOL;
        } elseif ($employees[$i]->hrsWorked<60 && $employees[$i]->hrsWorked>40) {
            $employeeSalary = (($employees[$i]->hrsWorked - 40)*($employees[$i]->basePay*1.5))+(40*$employees[$i]->basePay);
            echo "The {$employees[$i]->name} salary is {$employeeSalary}".PHP_EOL;
        } else {
            $employeeSalary = $employees[$i]->hrsWorked*$employees[$i]->basePay;
            echo "The {$employees[$i]->name} salary is {$employeeSalary}".PHP_EOL;
        }

    }
}
employeeSalary($employees);