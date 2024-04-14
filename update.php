<?php

    $servername = "localhost";
    $username = "siddhesh";
    $password = "password@123";
    $database = "my_database";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        die("Cannot Connect to Database!" . mysqli_connect_error());
    }

    $student_name = "Siddhesh";
    $roll = 13;

    $query = "UPDATE new_table SET Student_Name = 'Ratnesh', Roll_No = 63 WHERE ID = 1";

    if(mysqli_query($conn, $query)){
        echo "Query Inserted Successfully";
    }else{
        echo "Error: " . mysqli_error($conn);
    }

?>
