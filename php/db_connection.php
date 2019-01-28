<?php

//DB_CONNECTION

$servername = "localhost";
$username = "root";
$password = "";
$database = "MovieCentral"; //database name

try {
    &conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    //set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connection successfully: <br>";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>