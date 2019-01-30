<?php
    include "../db_connection.php";

    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];

    $result = "SELECT user_firstname
               FROM users 
               WHERE user_email = '$user_email' 
               AND user_password = '$user_password'";

    $db_result = $conn->query($result);

    if ($db_result->rowCount() != 0){
        foreach($db_result as $row){
            $firstname = $row['user_firstname'];
        }
        
        echo "Welcome " . $firstname;
        header("location:../../index.php?msg=1");
    }
    else 
    {
        echo 'The username or password is incorrect!';
        header("location:../../index.php?msg=2");
    }

?>