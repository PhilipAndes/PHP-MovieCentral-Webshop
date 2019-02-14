<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Sigmar+One" rel="stylesheet">
    <!-- overal style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- menu css: -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <!-- shopping cart css: -->
    <link rel="stylesheet" type="text/css" href="css/shopping_cart.css">
    <!-- login button css: -->
    <link rel="stylesheet" type="text/css" href="css/login_button.css">
    <title>Welcome</title>
</head> 
<body>

<div class="twinkling4 debug"></div>

<!-- Flex Container -------------------------------------------------------------------------------------->
   
    <div class="flexContainer debug">
        <div class="brandingText2 debug">
            <h1>movie central</h1>
        </div>
        <div class="brandingText debug">
            <h1></h1>
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
                    <!-- <img src="img/gif_3.gif" class="menu-image debug"/>  -->
                </div>
            </div>            

            <!-- Menu links-->
            <ul class="menu-nav debug">
                <li class="nav-item current debug">
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


<!-- Button to open the modal login form ----------------------------------------------------------------->
    <div class="loginButton debug">
        <?php
        session_start();

            if(!isset($_SESSION['userLoggedIn'])){
                echo '<button onclick="showBlock()">' . '<i class="fa fa-fw fa-user">' . '</i>' . 'Login' . '</button>';              
            }else{
                if($_SESSION['userLoggedIn'] == true){
                    echo '<div class="dropDown">' . 
                        '<button onmouseover="showDrp" class="dropBtn">' . '<i class="fa fa-fw fa-user">' . '</i>' . $_SESSION['user_firstname'] . '</button>' .
                        '<div class="dropDownContent">' . 

                        '<a href="personal_page.php?id=' . $_SESSION['user_id'] . '">' . 'My Page' . '</a>';

                    if ($_SESSION['user_type'] == 'Admin') {
                        echo '<a href="add_movie.php">' . 'Add Movie' . '</a>';
                    }


                    echo '<a href="cart_page.php">' . 'Shopping Cart' . '</a>' .
                        '<a href="logOut.php">' . 'Log Out' . '</a>' .
                        '</div>' .
                        '</div>';
                }else{
                    echo '<button onclick="showBlock()">Try again</button>';                           
                }  
            }
        ?>  
    </div>

<!-- The Modal ------------------------------------------------------------------------------------------->
    <div id="id01" class="modal debug">

    <!-- Modal Content -->
        <!-- avatar -->
        <form class="modal-content animate debug" action="php/login_form/login_handler2.php" method="POST">
            <div class="imgcontainer debug">
                <!-- <img src="img/avatar_2.png" alt="Avatar" class="avatar"> -->
                <img src="img/gif_1.gif" alt="waiting" title="Sign in!" class="avatar"/>
            </div>

            <!-- email and password login -->
            <div class="container debug">
                <label for="uname"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="user_email" autofocus required>

                <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="user_password" required>

                <!-- login button -->
                <button type="submit">Login</button>

                <!-- register button -->
                <button onclick="location.href='register.php';" id="registerButton";>Register</button>
                
                <!-- Checkbox remember me -->
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            
                <!-- Cancel button and forgot password? -->
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn debug">Cancel</button>
                    <!-- <span class="psw debug">Forgot <a href="#">password?</a></span> -->
            </div>
        </form>
    </div>
 

<!-- JavaScript ------------------------------------------------------------------------------------------->
    <!-- js menu button -->
    <script src="js/menu.js"></script>
    <!-- js login button -->
    <script src="js/login_button.js"></script>
</body>
</html>