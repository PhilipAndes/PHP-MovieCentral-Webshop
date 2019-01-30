<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Kosugi" rel="stylesheet">
    <!-- overal style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- menu css: -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <!-- login button css: -->
    <link rel="stylesheet" type="text/css" href="css/login_button.css">
    <title>Welcome</title>
</head>
<body>


<!-- Button to open the modal login form ----------------------------------------------------------------->
    <div class="loginButton debug">
        <button onclick="document.getElementById('id01').style.display='block'">Login</button>   
    </div>

<!-- The Modal ------------------------------------------------------------------------------------------->
    <div id="id01" class="modal debug">

        <!-- close button -->
        <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close1" title="Close Login">&times;</span> -->

    <!-- Modal Content -->
        <!-- avatar -->
        <form class="modal-content animate debug" action="php/login_form/login_handler.php" method="POST">
            <div class="imgcontainer debug">
                <img src="img/avatar_2.png" alt="Avatar" class="avatar">
            </div>

            <!-- email and password login -->
            <div class="container debug">
                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="user_email" autofocus required>

                <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="user_password" required>

                <!-- login button -->
                <!-- <button type="submit">Login</button> -->

                <!-- login / error message -->
                <?php 
                
                    if(isset($_GET['msg'])){
                        if ($_GET['msg'] == 1){
                            echo '<button type="submit">Welcome</button>';
                        }
                        if ($_GET['msg'] == 2){
                            echo '<button type="submit">Email / password is incorrect</button>';
                        }
                        
                    }else{
                        echo '<button type="submit">Login</button>';
                    }
                ?>

                <!-- register button -->
                <button onclick="location.href='register.php';" id="registerButton";>Register</button>
                
                <!-- Checkbox remember me -->
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            
                <!-- Cancel button and forgot password? -->
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn debug">Cancel</button>
                    <span class="psw debug">Forgot <a href="#">password?</a></span>
            </div>
        </form>
    </div>

<!-- Flex Container -------------------------------------------------------------------------------------->
    <div class="flexContainer debug">
        <div class="brandingText debug">
            <h1>Movie Central</h1>
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
                <li class="nav-item current debug">
                    <a href="index.php" class="nav-link">
                    Home 
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
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

<!-- JavaScript ------------------------------------------------------------------------------------------->
    <!-- js menu button -->
    <script src="js/menu.js"></script>
    <!-- js login button -->
    <script src="js/login_button.js"></script>
    <!-- js register button -->
    <!-- <script src="js/register_button.js"></script>    -->
</body>
</html>