<?php

$age = 45;

if($age<25){
    echo "you are too young for driving";
}elseif($age>25){
    echo "You can drive";
}else{
    echo "you are too old for driving";
}


//  Switch case
$age = 12;

switch($age){
    case 12:
        echo "Your age is 12";
        break;
    case 19:
        echo "Your age is 19";
        break;
    default:
    echo "Your age is weird";
    break;
}
?>