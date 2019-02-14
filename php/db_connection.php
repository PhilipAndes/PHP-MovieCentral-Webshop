<?php

// DB_CONNECTION.PHP

$servername = "localhost";
$username = "root";
$password = "";
$database = "moviecentral";

// $servername = "rdbms.strato.de";
// $username = "U3665659";
// $password = "@Codegorilla1234";
// $database = "DB3665659";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully: <br>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    
?>