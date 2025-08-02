<?php

// Operators in php
// 1. arithematic Operators(+,-,*%,/,**) -->

$a = 45;
$b = 8;

echo "For a+b result is" . ($a + $b) . "<br";

// 2. Assignment Operators
$x = $a;
echo "for x, the value is ". $x . "<br";

// 3. Comparison operators
$x = 7;
$y = 9;

echo "for x == y,the result is", var_dump($x == $y);
echo "<br>";

//4. Logical operators

$m = true;
$n = false;

echo "for m and n, the result is ";
echo var_dump($m and $n);
echo "<br>";

//not operator = !
?>