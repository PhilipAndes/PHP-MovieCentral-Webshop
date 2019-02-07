<?php

    session_start();
    
    $id_movie = $_GET["id"];   
    
    $user_id = $_SESSION['user_id'];

    include "../db_connection.php";

    try {
            $sql = "INSERT INTO cart (movie_id, user_id)
            VALUES ('$id_movie', '$user_id')";
            
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Movie added to cart successfully";
            // echo '<script>alert("Registered successfully ")</script>';
        }
    catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        } 
  

    $conn = null;

    header('location:../../movie_info.php?id=' .  $id_movie);   

?>

