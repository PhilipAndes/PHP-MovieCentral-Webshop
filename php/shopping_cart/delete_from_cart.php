<?php

    session_start();
    
    $id_movie = $_GET["id"];   
    
    $user_id = $_SESSION['user_id'];

    include "../db_connection.php";

    try {
            $sql = "DELETE FROM cart WHERE movie_id = $id_movie AND user_id = $user_id";
            
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Movie deleted from cart successfully";
            // echo '<script>alert("Movie deleted from cart successfully ")</script>';
        }
    catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        } 
  

    $conn = null;

    header('location:../../cart_page.php');   

?>