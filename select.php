<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "my_database";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Cannot Connect to Database!" . mysqli_connect_error());
    }

    $student_name = "Alpesh";
    $roll = 13;

    $query = "select * from new_table";

    if(mysqli_query($conn, $query)){
        echo "Query Inserted Successfully";
    }else{
        echo "Error: " . mysqli_error($conn);
    }

?>
