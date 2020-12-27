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
        <title>Cameras</title>
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
                <h1>Welcome to our Camera Store!</h1>
                <p> We have the best cameras from different brands.</p>
            </div>
        </div>
            
            <!--$$$$$$$$$$$$$$ Products $$$$$$$$$$$$$$$$$$$$$-->
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p20.jpg" class="img-thumbnail" alt="camera">
                        <h2>Canon EOS</h2>
                        <p>Price: Rs.76000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(20)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=20" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                        <?php  
                        }                            
                        }                            
                        ?>
                    </div>    
                     <div class="col-md-3 col-sm-6 item">    
                        <img src="Images/p21.jpg" class="img-thumbnail" alt="camera">
                        <h2>Sony DSLR</h2>
                        <p>Price: Rs.42000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(21)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=21" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                        
                        }                            
                        }                            
                        ?>
                     </div>   
                     <div class="col-md-3 col-sm-6 item">   
                        <img src="Images/p22.jpg" class="img-thumbnail" alt="camera">
                        <h2>Olympia XR</h2>
                        <p>Price: Rs.50000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(22)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=22" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                     </div>
                        <div class="col-md-3 col-sm-6 item">    
                        <img src="Images/p23.jpg" class="img-thumbnail" alt="camera">
                        <h2>Sony Mega</h2>
                        <p>Price: Rs.42000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(23)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=23" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
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
