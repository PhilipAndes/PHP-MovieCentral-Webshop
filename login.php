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
    <!-- Add login_form.css -->
    <link rel="stylesheet" type="text/css" href="css/login_form.css">
    <title>Login-form</title>
</head>
<body>
    
    <form action="php/login_form/form_handler.php" method="POST">
        <h2>Register Here</h2>

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

</body>
</html>