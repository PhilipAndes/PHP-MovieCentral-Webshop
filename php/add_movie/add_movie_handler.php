<?php

//where to save the images
// $target = "../../img/"; 
// $target = $target . basename( $_FILES['photo']['name']);

//retrieve other information from the form
$name = $_POST['name'];
$genre = $_POST['genre'];
$actor = $_POST['actor'];
$year = $_POST['year'];
$price = $_POST['price'];
$info = $_POST['info'];
// $img = $_POST['image'];

include "../db_connection.php";

try {
    $sql = "INSERT INTO movies (movie_name, movie_genre, movie_actor, movie_year, movie_price, movie_info)
    VALUES ('$name', '$genre', '$actor', '$year', '$price', '$info')";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New Movie added successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

// header("location:../../index.php");