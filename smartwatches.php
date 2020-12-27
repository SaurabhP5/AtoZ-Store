<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require '.\includes\common.php';
require '.\includes\check-if-added.php';
?>

<html>
    <head>
        <title>Smartwatches</title>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="shortcut icon" href="Images/fav.ico">
        <link type="text/css" href="style.css" rel="stylesheet"> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Navigation Bar/Header $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
        
          <?php
          require '.\includes\header.php';
        ?>
        <br><br><br><br>
        
        <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Content $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
        
            <!--$$$$$$$$$$$$$$ Jumbotron $$$$$$$$$$$$$$$$$$$$$-->
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Smartwatch Store!</h1>
                <p> We have the best smart watches from different brands.</p>
            </div>
        </div>
            
            <!--$$$$$$$$$$$$$$ Products $$$$$$$$$$$$$$$$$$$$$-->
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p17.jpg" class="img-thumbnail" alt="camera">
                        <h2>Apple series 5</h2>
                        <p>Price: Rs.76000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(17)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=17" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                        <?php  
                        }                            
                        }                            
                        ?>
                    </div>    
                     <div class="col-md-3 col-sm-6 item">    
                        <img src="Images/p18.jpg" class="img-thumbnail" alt="camera">
                        <h2>Samsung Gear</h2>
                        <p>Price: Rs.42000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(18)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=18" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                        
                        }                            
                        }                            
                        ?>
                     </div>   
                     <div class="col-md-3 col-sm-6 item">   
                        <img src="Images/p19.jpg" class="img-thumbnail" alt="camera">
                        <h2>Fossil</h2>
                        <p>Price: Rs.50000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(19)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=19" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                     </div>
                </div>
            </div>
            
            <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Footer $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
            
            <?php
            require '.\includes\footer.php';
            ?>
    </body>
</html>
