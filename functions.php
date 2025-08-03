<?php

    echo "welcome to Php tutorial on functions <br>";

    function processmarks($marksArr){
        $sum = 0;
        foreach ($marksArr as $value) {
            $sum += $value;
        }
          return $sum;
    }
  

    $rohan = [34, 98, 45, 12, 98, 93];
    $summarks = processMarks($rohan);
    echo "Total marks scored by rohan out of 600 is $summarks";
?>