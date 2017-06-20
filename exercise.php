<?php
// store each exercise in a string var
$exercise1 = 'Display "Hello World"';
$exercise2 = 'Convert Pounds to Kg';
$exercise3 = 'Convert Miles to Km';
$exercise4 = 'Convert Km to Miles';
$exercise5 = 'Convert Kg to Pounds';
// create a var containing the day of the week
$day = date('N');
$day = 5;
var_dump($day);
// use an if statement to test for the day of the week
if ($day == 1) {
    echo $exercise1;
} elseif ($day == 2) {
    echo $exercise2;
} elseif ($day == 3) {
    echo $exercise3;
} elseif ($day == 4) {
    echo $exercise4;
} else {
    echo $exercise5;
}
// display the corresponding exercise string


?>