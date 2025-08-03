<?php

echo " Welcome to multidimensional array in php <br>";

$multidim = array(array(1,2,3,4),
                array(4,5,6,7),
                array(8,9,10,11));

// echo var_dump($multidim);
// echo $multidim[1][2];

// // printing the contents of a 2 dimensitional array

// for ($i=0; $i <count($multidim); $i++) { 
//     echo var_dump($multidim);
//     echo "<br>";
// }

for ($i=0; $i <count($multidim) ; $i++) { 
    for ($j=0; $j <count($multidim[$i]) ; $j++) { 
        echo $multidim[$i][$j];
        echo" ";
    }
    echo"<br>";
}
?>