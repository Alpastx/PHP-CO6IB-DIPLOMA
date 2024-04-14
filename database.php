<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password);
    if(!$conn){
        die("Connection Failed: " .  mysqli_connect_error());
    }

    $query = "CREATE DATABASE DB_test";

    if(mysqli_query($conn, $query)){
        echo "Database Created Successfully";
    }else{
        echo "Error: " . mysqli_error($conn);
    }
    
?>