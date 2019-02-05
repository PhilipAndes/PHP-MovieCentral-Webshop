<?php
	
session_start();

//connection to database
include "php/db_connection.php";


    if(isset($_POST["add_to_cart"]))
    {        
      if(isset($_SESSION["shopping_cart"]))
      {
        $item_array_id = array_column($_SESSION["shopping_cart"], "movie_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
          $count = count($_SESSION["shopping_cart"]);

            //get all movie detail
            $item_array = array(
                'movie_id' => $_GET["id"],
                'movie_img' => $_POST["hidden_image"],
                'movie_name' => $_POST["hidden_name"],
                'movie_price' => $_POST['hidden_price'],
                'movie_quantity' => $_POST["quantity"]
            );

            $_SESSION["shopping_cart"][$count] = $item_array;

        } else {
            //movie added then this block 
            echo '<script>alert("Item allready added ")</script>';
            echo '<script>window.location = "index2.php"</script>';
        }
      } else {
        //cart is empty excute this block
            $item_array = array(
                'movie_id' => $_GET["id"],
                'movie_img' => $_POST["hidden_image"],
                'movie_name' => $_POST["hidden_name"],
                'movie_price' => $_POST['hidden_price'],
                'movie_quantity' => $_POST["quantity"]
            );

        $_SESSION["shopping_cart"][0] = $item_array;
      }
    }

    //Remove item in cart 
    if(isset($_GET["action"]))
    {
      if($_GET["action"] == "delete")
      {
        foreach($_SESSION["shopping_cart"] as $key=>$value)
            {
              if($value["movie_id"] == $_GET["id"])
              {
                unset($_SESSION["shopping_cart"][$key]);
                echo '<script>alert("Item removed")</script>';
                echo '<script>window.location="index2.php</script>';
              }
            }
      }
    }
?>
	
<!DOCTYPE html>  	
<html>  
    <head>  
        <title>Simple PHP Mysql Shopping Cart</title>  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    </head>  
    <body>  
        <div class="container" style="width:1000px;">  

            <?php

                $sql_qury = "SELECT * FROM movies ORDER BY movie_id ASC";

                $db_result = $conn->query($sql_qury);

                foreach ($db_result as $row)
                {                 
                }       
            
                $conn = null;
        
            ?>

        <div class="col-md-4">  
            <form method="post" action="index2.php?action=add&id=<?php echo $row["movie_id"];?>">  

                <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center"> 

                    <img src="/img/movies/<?php echo $row['movie_img'];?>" class="img-responsive"/><br /> 

                    <h4 class="text-info"><?php echo $row['movie_name'];?></h4> 

                    <h4 class="text-danger">€<?php echo $row['movie_price'];?></h4>

                    <input type="text" name="quantity" class="form-control" value="1" />  
                    <input type="hidden" name="hidden_name" value="<?php echo $row['movie_name'];?>" />
                    <input type="hidden" name="hidden_image" value="<?php echo $row['movie_img'];?>">
                    <input type="hidden" name="hidden_price" value="<?php echo $row['movie_price'];?>">
                    <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                </div>  
            </form>  
        </div>  

        <div style="clear:both"></div>  

        <br />  

        <h3>Order Details</h3>  

            <div class="table-responsive">  
                <table class="table table-bordered">  
                    <tr> 
                        <th>Movie image</th> 
                        <th width="40%">Movie Name</th>
                        <th width="10%">Quantity</th>     
                        <th width="20%">Price</th>  
                        <th width="15%">Total</th>  
                        <th width="5%">Action</th>  
                    </tr>  

                    <?php 

                        if(!empty($_SESSION["shopping_cart"]))
                        {

                            $total = 0;

                            foreach($_SESSION["shopping_cart"] as $key => $value)
                            {
                                ?>

                                <tr> 
                                    <td><img src="/img/movies/ <?php echo $value['movie_img'];?>" style="width: 100px;"></td>
                                    <td><?php echo $value['movie_name'];?></td>
                                    <td><?php echo $value['movie_quantity']; ?></td>  
                                    <td>€<?php echo $value['movie_price'];?></td>  
                                    <td>€<?php echo number_format($value["movie_quantity"] * $value["movie_price"],2);?></td>  
                                    <td><a href="index2.php?action=delete&id=<?php echo $value['movie_id'];?>"><span class="btn btn-danger">Remove</span></a></td>  
                                </tr>  

                                <?php $total = $total + ($value["movie_quantity"] * $value['movie_price']);
                            }

                                ?>
                                    <tr>  
                                    <td colspan="3" align="right">Total</td>  
                                    <td align="right">€<?php echo number_format($total);?></td>  
                                    <td></td>  
                                    </tr> 

                            <?php 
                        } 
                            ?> 

                </table>  
            </div>  
        </div>   
    </body>  
</html>