<?php
    $arr = array(array("Volvo",15), array("BMW", 34), array("Suzuki", 23), array("Ferrari", 12));
    for($i=0; $i<count($arr); $i++){
        for($j=0; $j<count($arr[$i]); $j++){
            print_r($arr[$i][$j]);
            echo "<br>";
        }
    }

?>