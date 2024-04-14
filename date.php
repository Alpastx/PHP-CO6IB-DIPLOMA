<?php

    echo "Date: <br>";
    $date = getdate();
    foreach($date as $key => $value){
        echo $key . ": " . $value . "<br>";
    }

    echo "<br>";

    echo "Time: <br>";
    $time = gettimeofday();
    foreach($time as $key => $value){
        echo $key . ": " . $value . "<br>";
    }

    echo "<br>";

    echo "Local Time: <br>";
    $local_time = idate("d");
    echo $local_time . "<br><br>";    

    echo "Time: <br>";
    $time = time();
    echo $time;
?>
