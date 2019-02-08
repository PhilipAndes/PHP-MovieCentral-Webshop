<?php
    include "php/db_connection.php";        

    $sql_querie = "SELECT movie_id, movie_name, movie_genre, movie_actor, movie_year, movie_price, movie_info, movie_img FROM movies WHERE movie_genre = 'Horror'";
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        echo '<div class="card container debug">' .  
            '<img src="/codegorilla/MovieCentral/img/' . $row['movie_img'] . '" alt="' . '"class="image"'  . '" style="width:100%">' .
             
            '<div class="middle">' .
            '<a href="movie_info.php?id=' . $row['movie_id'] . '">' .
            '<div class="text">' . 'View Movie' . '</div>' . '</a>' . 
            '</div>' . 
            '</div>';
    }       

    $conn = null;

?>