<?php
    include "php/db_connection.php";        

    $sql_querie = "SELECT movie_id, movie_name, movie_genre, movie_actor, movie_year, movie_price, movie_info, movie_img FROM movies ORDER BY movie_year DESC"; 
    
    $db_result = $conn->query($sql_querie);  

    foreach ($db_result as $row)
    {            
        
        echo '<div class="card debug">' .
             '<img src="/codegorilla/MovieCentral/img/' . $row['movie_img'] . '" alt="' . $row['movie_name'] . '" style="width:100%">' .
             '<h1>' . $row['movie_name']  . '</h1>' .
            //  '<h2 class="price">' . '€' . $row['movie_price'] . ',-' . '</h2>' .
             '<h2 class="price">' . 'Year:' . $row['movie_year'] . '</h2>' .
             '<a href="movie_info.php?id=' . $row['movie_id'] . '">' .          
             '<p>' . '<button>' . 'Click For More Info' . '</button>' . '</p>' .
             '</a>' .
             '</div>';
       
    }       

    $conn = null;

?>