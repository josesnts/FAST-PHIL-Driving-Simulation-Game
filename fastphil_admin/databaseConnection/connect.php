<?php

    $server = "localhost";
    $username = "root"; 
    $password = ""; 
    $database = "fastphildsg"; 

    $connect = new mysqli($server, $username, $password, $database);

if ($connect->connect_error) {

    die("Database connection failed: " . $connect->connect_error);

}

?> 