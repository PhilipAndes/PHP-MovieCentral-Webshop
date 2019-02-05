<?php

//where to save the images
$target_dir = "/moviecentral/img/movies/";
$name = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . strtolower($name);
var_dump($_FILES);
echo '<br />' . $target_file . '<br />';
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . '<br />';
        $uploadOk = 1;
    } else {
        echo "File is not an image. <br />";
        $uploadOk = 0;
    }

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists. <br />";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1048576) {
    echo "Sorry, your file is too large. <br />";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br />";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded. <br />";

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded. <br />";
    } else {
        echo "Sorry, there was an error uploading your file. <br />";
    }
}
/*
//retrieve other information from the form
$name = $_POST['name'];
$genre = $_POST['genre'];
$actor = $_POST['actor'];
$year = $_POST['year'];
$price = $_POST['price'];
$info = $_POST['info'];
// $img = $_POST['fileToUpload'];

include "../db_connection.php";

try {
    $sql = "INSERT INTO movies (movie_name, movie_genre, movie_actor, movie_year, movie_price, movie_info)
    VALUES ('$name', '$genre', '$actor', '$year', '$price', '$info')";
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New Movie added successfully";
}
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null; */

// header("location:../../index.php");