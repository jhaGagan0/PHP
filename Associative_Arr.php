<?php

echo "Welcome to associative array <br>";

$favcol = array('Gagan' => 'red', 'aman'=>'green',
                        'harry'=> 'brown', 8=>'this');
// echo $favcol['Gagan'];
// echo "<br>";
// echo $favcol['harry'];
// echo "<br>";
// echo $favcol['8'];
// echo "<br>";

foreach ($favcol as $key => $value) {
   echo "<br> Favourite color of $key is $value";
}

?>