<?php
    session_start();

    include "../db_connection.php"; //connectie met db

    $user_email = $_POST['user_email']; 
    $user_password = $_POST['user_password'];

    $result = "SELECT user_firstname, user_lastname, user_id  
               FROM users 
               WHERE user_email = '$user_email' 
               AND user_password = '$user_password'";

    $db_result = $conn->query($result);

    if ($db_result->rowCount() != 0){   // Informatie klopt, dus we krijgen 1 row binnen,  dus we zijn ingelogd.
        
        foreach($db_result as $row){
            $_SESSION['user_firstname'] = $row['user_firstname'];
            $_SESSION['user_lastname'] = $row['user_lastname'];
            $_SESSION['user_id'] = $row['user_id'];
        }
      
        $_SESSION['userLoggedIn'] = true;
         
        header("location:../../index.php");
    }
    else 
    {
        $_SESSION['userLoggedIn'] = false;
        // Informatie klopt NIET, dus we moeten het opnieuuw proberen?
        echo 'The username or password is incorrect!';
        header("location:../../index.php");
    }

?>