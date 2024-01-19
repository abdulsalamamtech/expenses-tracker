<?php

// Start Session for this app
session_start();

// CONNECTION TO DATABASE
$db_host = "localhost";
$user_name = "root";
$user_password = "";
$db_name = "expenses-tracker";


    $conn = mysqli_connect($db_host, $user_name, $user_password, $db_name);
    if(!$conn){
        die("DB connection error" . mysqli_error($conn) );
    }
    else{
        // echo "connection is good";
    }
    
