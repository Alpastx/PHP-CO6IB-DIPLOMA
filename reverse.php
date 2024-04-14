<?php
    
    $number = 1234;
    $reverse = 0;

    while($number > 1){
        $ddigit = $number % 10;
        $reverse = $reverse * 10 + $ddigit;
        $number = ($number / 10);
    }

    echo "Reverse is: " . $reverse;

?>
