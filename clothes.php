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
        <title>Men's Clothing</title>
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
                <h1>Welcome to our Fashion Store!</h1>
                <p> We have the best men's clothing collection from different brands.</p>
            </div>
        </div>
            
            <!--$$$$$$$$$$$$$$ Products $$$$$$$$$$$$$$$$$$$$$-->
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p9.jpg" class="img-thumbnail" alt="camera">
                        <h2>Mufti Shirt</h2>
                        <p>Price: Rs.760</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(9)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                        <?php  
                        }                            
                        }                            
                        ?>
                    </div>    
                     <div class="col-md-3 col-sm-6 item">    
                        <img src="Images/p10.jpg" class="img-thumbnail" alt="camera">
                        <h2>Linen</h2>
                        <p>Price: Rs.1200</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(10)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                        
                        }                            
                        }                            
                        ?>
                     </div>   
                     <div class="col-md-3 col-sm-6 item">   
                        <img src="Images/p11.jpg" class="img-thumbnail" alt="camera">
                        <h2>Cotton King</h2>
                        <p>Price: Rs.5000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(11)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                     </div>
                     <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p12.jpg" class="img-thumbnail" alt="camera">
                        <h2>Peter England</h2>
                        <p>Price: Rs.9000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(12)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                     </div>
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p13.jpg" class="img-thumbnail" alt="camera">
                        <h2>Pepe Jeans</h2>
                        <p>Price: Rs.7300</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(13)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p14.jpg" class="img-thumbnail" alt="camera">
                        <h2>Levi</h2>
                        <p>Price: Rs.3300</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(14)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=14" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                        <?php                                 
                        
                        }                            
                        }                            
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p15.jpg" class="img-thumbnail" alt="camera">
                        <h2>Lee Cooper</h2>
                        <p>Price: Rs.3800</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(15)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=15" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p16.jpg" class="img-thumbnail" alt="camera">
                        <h2>Netplay</h2>
                        <p>Price: Rs.88000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(16)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
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
