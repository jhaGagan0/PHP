<?php

echo "Welcome to scope of variables<br>";
$a = 98; // Global variable .. accesible only outside of functions
$b = 9;

function printvalue(){
    // $a = 97; // local variable
    global $a, $b; // Give me the access to thi global variable 
    $a = 100;
    $b = 1000;
    echo "<br>The value of your variable a is $a and b is $b";

}

echo $a;
printvalue();
echo "<br>The value of your variable a is $a and b is $b <br>";
// global variable is changed in the function permanently

// echo var_dump($GLOBALS); // prints all global variables
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>