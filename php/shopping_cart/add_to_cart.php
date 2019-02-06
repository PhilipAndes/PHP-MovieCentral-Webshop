<?php
    // $firstname = $_POST['user_firstname'];
    $id_movie = $_GET["id"];    

    include "../db_connection.php";

    try {
            $sql = "INSERT INTO cart (movie_id, user_id)
            VALUES ('$id_movie', 3)";
            
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

    // header("location:../../movie_info.php?id=' . '$row['movie_id']'");


    

?>

