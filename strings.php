<?php

$name = "Gagan is a good boy";
echo $name;
echo "<br>";

echo "The length of my string is" . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "Gagan");
echo "<br>";
echo str_replace("Harry", "Rohan", $name);
echo "<br>";
echo str_repeat($name, 5);
echo "<br>";
echo "<pre>";
echo rtrim("   this is a good boy   ");
echo "<pre>";
echo "<pre>";
echo ltrim("   this is a good boy   ");
echo "<pre>";
echo "<br>";

?>