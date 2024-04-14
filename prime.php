<?php
    
    $range = 100;
    for($i = 1; $i <= $range; $i++){

        $is_prime = true;

        if($i == 1){
            echo "{$i} is neither Prime nor Composite <br>";
        }else{
            for($j = 2; $j <= sqrt($i); $j++){
                if($i % $j == 0){
                    $is_prime = false;
                    break;
                }
            }
        }
        if($is_prime){
            echo "{$i} is Prime <br>";
        }else{
            echo "{$i} is not Prime <br>";
        }
    }

?>
