<?php

include "php/db_connection.php";

$id = $_GET['id'];                

$user_id = "SELECT * FROM users WHERE 'user_id' = '$id'";

$db_result = $conn->query($user_id); 

foreach ($db_result as $row)
{            
    
    echo 
        '<div class="card2 debug">' .
        '<h1>' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '</h1>' .
        '<p class="gameinfo2">' . '<span class="gameinfo3">' . 'Country: ' . '</span>' . $row['user_country'] . '</p>' .
        '<p class="gameinfo2">' . '<span class="gameinfo3">' . 'Age: ' . '</span>' . $row['user_birthday'] . '</p>' .
        '<p class="gameinfo2">' . '<span class="gameinfo3">' . 'Email: ' . '</span>' . $row['user_email'] . '</p>' .
        '<p class="gameinfo2">' . '<span class="gameinfo3">' . 'Password: ' . '</span>' . $row['user_password'] . '</p>' .
        '</div>';

}    

?>