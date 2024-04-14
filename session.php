<?php
    
    session_start();

    $_SESSION["username"] = "Siddhesh";
    $_SESSION["age"] = 17;

    $username = $_SESSION["username"];
    $age = $_SESSION["age"];

    echo "Username: " . $username . "<br>";
    echo "Age: " . $age;

    session_destroy();

?>
