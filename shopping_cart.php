<?php

    session_start();

    $user_id = $_SESSION['user_id'];

    include "php/db_connection.php";        

    $sql_querie = "SELECT cart.movie_id, movies.movie_name, movies.movie_price, movies.movie_img 
    FROM cart 
    INNER JOIN movies ON cart.movie_id = movies.movie_id
    WHERE user_id = '$user_id'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo $row['movie_id'];
        echo "<br>";
        echo $row['movie_name'];
        echo "<br>";
        echo $row['movie_price'];
        echo "<br>";
        echo $row['movie_img'];
        echo "<br>";
       
    }       

    $conn = null;

?>