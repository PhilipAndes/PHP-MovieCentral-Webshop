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
    <title>Add Movie</title>
</head>
<body>

<!-- top box --------------------------------------------------------------------------------------------->
    <div class="topBox debug">
        <div class="topBoxText debug">
            <h1>add movie</h1>
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

<!-- add movie -------------------------------------------------------------------------------------------->

    <form action="php/add_movie/add_movie_handler.php" method="POST" enctype="multipart/form-data"> 
        Movie Name: <input type="text" name="name" required><br>
        <!-- dropdown genre --> 
        Movie Genre: <select name="genre" required>              
                        <option value="action">Action</option>
                        <option value="horror">Horror</option>               
                        <option value="comedy">Comedy</option>
                        <option value="scifi">Science Fiction</option>               
                    </select><br>
        <!-- end dropdown -->
        Movie Actor:<input type="text" name="actor" required><br> 
        Movie Year:<input type="year" name="year" required><br>
        Movie Price:<input type="text" name="price" required><br>
        Movie Info:<input type="text" name="info" required><br>
        <!-- add image -->
        <!-- Select image:<input type="file" name="image"><br> -->

        <!-- Movie Image:<input type="file" name="photo" required><br> -->

        <input type="submit" value="Add Movie">
        <button type="reset" value="Reset" class="btn">Reset</button>   
    </form>

<!-- JavaScript ------------------------------------------------------------------------------------------->
    <!-- js menu button -->
    <script src="js/menu.js"></script>
    <!-- js sidebar -->
    <script src="js/movie_filter_genre.js"></script>
    

</body>
</html>