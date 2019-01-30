<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Kosugi" rel="stylesheet">
    <!-- Add login_form.css -->
    <link rel="stylesheet" type="text/css" href="css/register_form.css">
    <!-- overal style -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- menu css: -->
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <title>Login-form</title>
</head>
<body>
    
    <form class="register-form" action="php/register_form/register_handler.php" method="POST">
        <h2>Register</h2>

            <!-- First Name -->
            <div class="input-container">
                <label class="fa fa-user icon"></label>
                    <input class="input-field" type="text" placeholder="First Name" name="user_firstname" autofocus required>
            </div>

            <!-- Last Name -->
            <div class="input-container">
                <label class="fa fa-user icon"></label>
                    <input class="input-field" type="text" placeholder="Last Name" name="user_lastname" required>
            </div>

            <!-- Email -->
            <div class="input-container">
                <label class="fa fa-envelope icon"></label>
                    <input class="input-field" type="text" placeholder="Email" name="user_email" required>
            </div>

            <!-- Password -->
            <div class="input-container">
                <label class="fa fa-key icon"></label>
                    <input class="input-field" type="password" placeholder="Password" name="user_password" required>
            </div>

            <!-- Date of Birth -->
            <div class="input-container">
                <label class="fa fa-calendar icon"></label>
                    <input class="input-field" type="date" placeholder="Birthday" name="user_birthday" required>
            </div>

            <!-- Country -->
            <!-- <div class="input-container">
                <i class="fa fa-globe icon"></i>
                    <input class="input-field" type="text" placeholder="Country" name="user_country">
            </div> -->

            <!-- <label class="fa fa-globe icon"></label> -->
            <div class="input-container">
                <label class="fa fa-globe icon"></label>
                    <select  name="user_country" required>
                        <optgroup label="Country">                      
                            <option value="netherlands">Netherlands</option>
                            <option value="germany">Germany</option>               
                            <option value="france">France</option>
                            <option value="spain">Spain</option>
                            <option value="italy">Italy</option>
                            <option value="greece">Greece</option>
                            <option value="belgium">Belgium</option>
                            <option value="denmark">Denmark</option>
                            <option value="luxembourg">Luxembourg</option>
                        </optgroup>                      
                </select>
            </div>



        <button type="submit" class="btn"> Register</button>
        <button type="reset" value="Reset" class="btn">Reset</button>
    </form>


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

</body>
</html>