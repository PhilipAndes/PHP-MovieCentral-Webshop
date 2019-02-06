<?php

    // echo $_GET["user_firstname"]; 
    // echo "<br>";
    // echo $_GET["user_lastname"];
    // echo "<br>";
    // echo $_GET["user_email"];  
    // echo "<br>";
    // echo $_GET["user_password"]; 
    // echo "<br>";
    // echo $_GET["user_birthday"] ; 
    // echo "<br>";
    // echo $_GET["user_country"]; 

    echo "<br>";
    echo $_POST["user_firstname"]; 
    echo "<br>";
    echo $_POST["user_lastname"];
    echo "<br>";
    echo $_POST["user_country"];  
    echo "<br>";
    echo $_POST["user_birthday"]; 
    echo "<br>";
    echo $_POST["user_email"] ; 
    echo "<br>";
    echo $_POST["user_password"]; 

        $firstname = $_POST['user_firstname'];
        $lastname = $_POST["user_lastname"];
        $country = $_POST["user_country"];
        $birthday = $_POST["user_birthday"];
        $email = $_POST["user_email"];
        $user_password = $_POST["user_password"];       
    
        include "../db_connection.php";

        try {
                $sql = "INSERT INTO users (user_firstname, user_lastname, user_country, user_birthday, User_email, user_password)
                VALUES ('$firstname', '$lastname', '$country', '$birthday' , '$email', '$user_password')";
                
                // use exec() because no results are returned
                $conn->exec($sql);
                // echo "New record created successfully";
                echo '<script>alert("Registered successfully ")</script>';
            }
        catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;
        
        header("location:../../index.php");
       

        // $folderString = "../img/";
        // $folderString .= $_GET["user_firstname"];
        // echo $folderString;
    
        // $DBIMG = "banaantje.jpg";
    
        // $DMIMG = $folderString . $DBIMG;    

?>