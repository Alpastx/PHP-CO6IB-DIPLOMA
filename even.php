<?php

    $sum = 0;
    echo "Even numbers :";
    for($i = 0; $i <= 10; $i++){
        if($i % 2 == 0){
          echo $i." ";
            $sum = $sum + $i;
        }
    }
    echo "<br>Sum Of Even Number Is: " . $sum;

?>
