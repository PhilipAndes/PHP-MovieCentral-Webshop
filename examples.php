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