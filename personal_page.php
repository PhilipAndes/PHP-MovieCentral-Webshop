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
    <!-- menu css: -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <!-- movie cards info css -->
    <link rel="stylesheet" type="text/css" href="css/movie_info.css"/>
    <!-- overal  css -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Personal Page</title>
</head>
<body id="personalBG">

<!-- top box --------------------------------------------------------------------------------------------->
    <div class="topBox debug">
        <div class="topBoxText debug">
            <h1> personal info</h1>
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
                    <a href="#" class="nav-link debug">
                    <i class="fa fa-fw fa-envelope"></i>
                    Contact 
                    </a>
                </li>
            </ul>
        </nav>
    </header>

<!-- personal info ---------------------------------------------------------------------------------------> 
    <div class="cards debug">
        <?php

            include "php/db_connection.php";        

            $sql_querie = "SELECT * FROM users WHERE user_id = " . $_GET['id'];
            
            $db_result = $conn->query($sql_querie);  

            foreach ($db_result as $row)
            {            
                echo 
                '<div class="card3 debug">' .
                '<h1>' . $row['user_firstname'] . ' ' . $row['user_lastname'] . '</h1>' .
                '<p class="gameinfo4">' . '<span class="gameinfo3">' . 'Country: ' . '</span>' . $row['user_country'] . '</p>' .
                '<p class="gameinfo4">' . '<span class="gameinfo3">' . 'Age: ' . '</span>' . $row['user_birthday'] . '</p>' .
                '<p class="gameinfo4">' . '<span class="gameinfo3">' . 'Email: ' . '</span>' . $row['user_email'] . '</p>' .
                '<p class="gameinfo4">' . '<span class="gameinfo3">' . 'Password: ' . '</span>' . $row['user_password'] . '</p>' .
                '</div>';
        
            }       
            $conn = null;
        ?>
    </div>  


<!-- JavaScript ------------------------------------------------------------------------------------------->
    <!-- js menu button -->
    <script src="js/menu.js"></script>

    <!-- js sidebar -->
    <script src="js/movie_filter_genre.js"></script>
    

</body>
</html>