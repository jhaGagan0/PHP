<?php

$name = "Harry";
$income = 200;

// php data types
//string - sequence of characters

$name = "gagan";
$friend = "Rohan";

echo "$name ka friend is $friend";


// integer non decimal number
$income = 450;
$debts = -655;

echo $income;
echo "<br>";
echo $debts;
echo "<br>";


// float decimal numbers
$income = 344.5;
$debts = -45.5;

echo $income;
echo "<br>";
echo $debts;
echo "<br>";
// boolean - either true or false
$x = true;
$is_friend = false;

echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
// var_dump is a function that gives the value and type of the variable 

// object - instance s of classes
// employee is a class ---> harry can be one object

// array - used to store multiple values in a single variable

$friends = array("Rohan", "shubham", "skillf", "larry");
echo var_dump($friends);
echo "<br>";
echo $friends[0];

// null
$name = NULL;
echo "<br>";
echo var_dump($name);
?>