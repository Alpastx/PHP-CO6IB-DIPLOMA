<?php
    
    $arr = array("name" => "Siddhesh", "age" => 17, "roll no" => 13);
    
    $keys = array_keys($arr);
    $values = array_values($arr);

    // foreach ($arr as $keys => $values){
    //     echo $keys . ": " . $values . "<br>";
    // }

    $count = count($arr);
    for ($i=0; $i < $count; $i++){
        echo $keys[$i] . ": " . $values[$i] . "<br>";
    }

?>
