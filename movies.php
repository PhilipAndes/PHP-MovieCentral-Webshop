<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Kosugi" rel="stylesheet">
    <!-- movie cards css -->
    <link rel="stylesheet" type="text/css" href="css/movies.css"/>
    <!-- menu css: -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <!-- js sidebar -->
    <script src="js/movie_filter_genre.js"></script>
    <title>Movies</title>
</head>
<body>

<!-- top box -->
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

        <!-- Menu navigation menu text-->
        <!-- <nav class="menu">
            <div class="menu-branding">
                <div class="menu-text">
                    <span class="text1">MovieCentral</span>
                    <span class="text2"></span>
                </div>
            </div> -->

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
                    Home 
                    </a>
                </li>

                <li class="nav-item current debug">
                    <a href="movies.php" class="nav-link">
                    Movies
                    </a>

                <li class="nav-item debug">
                    <a href="#" class="nav-link debug">
                    Contact 
                    </a>
                </li>
            </ul>
        </nav>
    </header>

<!-- Side navigation !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
    <div class="sidenav">
        <!-- <a href="#">About</a> -->
        <form>
            <select name="users" onchange="showGenre(this.value)">
            <option value="">Select a Genre:</option>
            <option value="1">Action</option>
            <option value="2">Horror</option>
            <option value="3">Comedy</option>
            <option value="4">Science Fiction</option>
            </select>
        </form>
        <!-- <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a> -->
    </div>

<div class="main">
   
    <!-- PHP CARDS !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->         
    <div class="cards debug">
        <?php include "php/movie_card/movie_card.php"; ?>
    </div>
    
</div> 
<!-- JavaScript ------------------------------------------------------------------------------------------->
    <!-- js menu button -->
    <script src="js/menu.js"></script>

</body>
</html>