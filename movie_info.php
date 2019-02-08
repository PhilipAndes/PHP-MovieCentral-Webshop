<?php

    if(isset($_GET['s'])){
        // echo "<h1> Movie Added </h1>";
        echo '<script>alert("Movie Added To Cart! ")</script>';
    }

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Kosugi" rel="stylesheet">
    <!-- movie cards css -->
    <link rel="stylesheet" type="text/css" href="css/movies.css"/>
    <!-- movie cards info css -->
    <link rel="stylesheet" type="text/css" href="css/movie_info.css"/>
    <!-- menu css: -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <!-- shopping cart css: -->
    <link rel="stylesheet" type="text/css" href="css/shopping_cart.css">
    <!-- overal  css -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Movies</title>
</head>
<body id="movieinfoBG">

<!-- top box --------------------------------------------------------------------------------------------->
    <div class="topBox debug">
        <div class="topBoxText debug">
            <h1> movie info</h1>
        </div>
    </div>

<!-- Menu button top right-------------------------------------------------------------------------------->
    <header>
        <div class="menu-btn debug">
            <div class="btn-line"></div>
            <div class="btn-line"></div>
            <div class="btn-line"></div>
        </div>

        <!-- Menu navigation menu image-->
        <nav class="menu debug">
            <div class="menu-branding debug">
                <div class="menu-text debug">
                    <!-- <img src="img/menu_1.jpg" class="menu-image debug"/>  -->
                </div>
            </div>            

            <!-- Menu links-->
            <ul class="menu-nav debug">
                <li class="nav-item debug">
                    <a href="index.php" class="nav-link">
                    <i class="fa fa-fw fa-home"></i>
                    Home 
                    </a>
                </li>

                <li class="nav-item debug">
                    <a href="movies.php" class="nav-link">
                    <i class="fas fa-desktop"></i>
                    Movies
                    </a>

                <li class="nav-item debug">
                    <a href="contact.php" class="nav-link debug">
                    <i class="fa fa-fw fa-envelope"></i>
                    Contact 
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    
<!-- Shopping cart top left------------------------------------------------------------------------------>  
<a href="cart_page.php" title="open cart">
        <div class="icon-cart"> 
            <div class="cart-line-1" style="background-color: #E5E9EA"></div>
            <div class="cart-line-2" style="background-color: #E5E9EA"></div>
            <div class="cart-line-3" style="background-color: #E5E9EA"></div>
            <div class="cart-wheel" style="background-color: #E5E9EA"></div>
        </div>
    </a>
 
  
<!-- movie card info ---------------------------------------------------------------------------------------> 
    <div class="cards debug">
        <?php
            session_start();
            include "php/db_connection.php";

            $id = $_GET['id'];

           //z echo $_SESSION['user_id'];
                            

            $movieInfo = "SELECT * FROM movies WHERE movie_id = '$id'";
            

            $db_result = $conn->query($movieInfo); 
            // $db_result = $conn->query($userInfo); 
            
            foreach ($db_result as $row)
            {            
                
                echo '<div class="card2 debug">' .
                    '<img src="/codegorilla/MovieCentral/img/' . $row['movie_img'] . '" alt="' . $row['movie_name'] . '" style="width:100%">' .
                    '</div>' .

                    // game info
                    '<div class="card2 debug">' .
                    '<h1 id="movieinfoHeader1">' . 'About The Movie:' . '</h1>' .
                    '<p class="gameinfo2">' . $row['movie_info'] . '</p>' .


                    //go back button
                    '<a href="movies.php?id=' . $row['movie_id'] . '">' .          
                    '<p>' . '<button>' . 'Back to Movies' . '</button>' . '</p>' .
                    '</a>' .
                    '</div>' .
 
                    '<div class="card2 debug">' .
                    // h1 movie name 
                    '<h1 id="movieinfoHeader2">' . $row['movie_name']  . '</h1>' .
                    '<p class="gameinfo1">' . '<span class="gameinfo3">' . 'Genre: ' . '</span>' . $row['movie_genre'] . '</p>' .
                    '<p class="gameinfo1">' . '<span class="gameinfo3">' . 'Actor: ' . '</span>' . $row['movie_actor'] . '</p>' .
                    '<p class="gameinfo1">' . '<span class="gameinfo3">' . 'Year: ' . '</span>' . $row['movie_year'] . '</p>' .           
                    '<p class="gameinfo2">' . '<span class="orderNow">' . 'Order now @' . '<p class="gamestop"> MovieCentral</p>' . '</p>' .
                    
                    //payment methods icons:
                    '<p class="payIcons">' . '<span class="gameinfo3">' . 'Pay With: ' . '</span>' . '<i class="fab fa-cc-paypal">'. '</i>' . ' ' . '<i class="fab fa-cc-visa"></i>' . '</p>' .

                    '<h2 class="price">' . '€' . $row['movie_price'] . ',-' . '</h2>' .



                    //Add to cart button
                    '<a href="php/shopping_cart/add_to_cart.php?id=' . $row['movie_id'] . '">' .          
                    '<p>' . '<button>' . 'Add to Cart' . '</button>' . '</p>' .
                    '</a>' .
                    '</div>';
            
            }    

        ?>
    </div>

<!-- JavaScript ------------------------------------------------------------------------------------------->
    <!-- js menu button -->
    <script src="js/menu.js"></script>

</body>
</html>        