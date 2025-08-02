<?php
//While loop
$i =0;
while($i<5){
    echo "$i";
    echo "<br>";
    $i+=1;
}

//for loops
for ($i=0; $i<10; $i++) { 
    echo "$i <br>";
}

//do while loop
$i = 89;
do{
    echo "$i <br>";
    $i++;
}while($i<5);


// foreach loop

$arr = array("banana", "apple", "Harpic", "Bread", "Butter");

foreach ($arr as $value){
    echo "$value <br>";
}
?>

