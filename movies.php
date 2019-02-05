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
    <title>Movies</title>
</head>
<body>

<!-- top box --------------------------------------------------------------------------------------------->
    <div class="topBox debug">
        <div class="topBoxText debug">
            <h1> movies</h1>
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

                <li class="nav-item current debug">
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

<!-- Side navigation !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <div class="sidenav">

        <div class="tab">    
                <button class="tablinks" onclick="openMovie(event, 'allMovies')" id="defaultOpen">Show All</button>
                <button class="tablinks" onclick="openMovie(event, 'Action')">Action</button>
                <button class="tablinks" onclick="openMovie(event, 'Horror')">Horror</button>
                <button class="tablinks" onclick="openMovie(event, 'Comedy')">Comedy</button>
                <button class="tablinks" onclick="openMovie(event, 'Scifi')">Sci-Fi</button>
        </div>

        <div class="tab">  
            <button class="tablinks" onclick="openMovie(event, 'moviePrice')" id="defaultOpen">Price Low High</button>
        </div>

        <div class="tab">  
            <button class="tablinks" onclick="openMovie(event, 'movieYear')" id="defaultOpen">Year New Old</button>
        </div>

    </div>

<!-- all movie cards -->
    <div class="main">
        <div id="allMovies" class="tabcontent">
            <div class="cards debug">
                <?php include "php/movie_card/movie_card.php"; ?>
             </div>
        </div>
    </div>

<!-- action movie cards -->
    <div class="main">
        <div id="Action" class="tabcontent">
            <div class="cards debug">
                <?php include "php/movie_card/movie_card_action.php"; ?>
             </div>
        </div>
    </div>

<!-- Horror movie cards -->
    <div class="main">
        <div id="Horror" class="tabcontent">
            <div class="cards debug">
                <?php include "php/movie_card/movie_card_horror.php"; ?>
             </div>
        </div>
    </div>


<!-- Comedy movie cards -->
    <div class="main">
        <div id="Comedy" class="tabcontent">
            <div class="cards debug">
                <?php include "php/movie_card/movie_card_comedy.php"; ?>
             </div>
        </div>
    </div>  
   
<!-- scifi movie cards -->
    <div class="main">
        <div id="Scifi" class="tabcontent">
            <div class="cards debug">
                <?php include "php/movie_card/movie_card_scifi.php"; ?>
             </div>
        </div>
    </div>

<!-- movie price filter -->   
    <div class="main">
        <div id="moviePrice" class="tabcontent">
            <div class="cards debug">
                <?php include "php/movie_card/movie_card_price.php"; ?>
             </div>
        </div>
    </div>

<!-- movie year filter -->   
    <div class="main">
        <div id="movieYear" class="tabcontent">
            <div class="cards debug">
                <?php include "php/movie_card/movie_card_year.php"; ?>
             </div>
        </div>
    </div>    


<!-- JavaScript ------------------------------------------------------------------------------------------->
    <!-- js menu button -->
    <script src="js/menu.js"></script>

    <!-- js sidebar -->
    <script src="js/movie_filter_genre.js"></script>
    

</body>
</html>