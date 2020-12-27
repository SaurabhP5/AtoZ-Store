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
        <title>Smartphones</title>
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
                <h1>Welcome to our Smartphone Store!</h1>
                <p> We have the best flagship smartphones from different brands.</p>
            </div>
        </div>
            
            <!--$$$$$$$$$$$$$$ Products $$$$$$$$$$$$$$$$$$$$$-->
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p1.jpg" class="img-thumbnail" alt="camera">
                        <h2>Apple iPhone 11 128GB</h2>
                        <p>Price: Rs.76000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(1)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                        <?php  
                        }                            
                        }                            
                        ?>
                    </div>    
                     <div class="col-md-3 col-sm-6 item">    
                        <img src="Images/p2.jpg" class="img-thumbnail" alt="camera">
                        <h2>Apple iPhone 11 pro</h2>
                        <p>Price: Rs.120000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(2)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                        
                        }                            
                        }                            
                        ?>
                     </div>   
                     <div class="col-md-3 col-sm-6 item">   
                        <img src="Images/p3.jpg" class="img-thumbnail" alt="camera">
                        <h2>Samsung galaxy note 10</h2>
                        <p>Price: Rs.50000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(3)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                     </div>
                     <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p4.jpg" class="img-thumbnail" alt="camera">
                        <h2>Samsung galaxy note 10 plus</h2>
                        <p>Price: Rs.90000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(4)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                     </div>
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p5.jpg" class="img-thumbnail" alt="camera">
                        <h2>LG G8 Thinq</h2>
                        <p>Price: Rs.73000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(5)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p6.jpg" class="img-thumbnail" alt="camera">
                        <h2>Oneplus 7</h2>
                        <p>Price: Rs.33000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(6)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                    
                        <?php                                 
                        
                        }                            
                        }                            
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p7.jpg" class="img-thumbnail" alt="camera">
                        <h2>Xiaomi Mi 9</h2>
                        <p>Price: Rs.38000.00</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(7)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
                        <?php                                 
                            
                        }                            
                        }                            
                        ?>
                    </div>
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p8.jpg" class="img-thumbnail" alt="camera">
                        <h2>Asus ROG 2</h2>
                        <p>Price: Rs.88000</p>
                        <?php if (!isset($_SESSION['email'])) { ?> 
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>                                 
                        <?php } else {                                                                
                        if (check_if_added_to_cart(8)) {                                   
                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>'; 
                        } else {                                     
                        ?>                                     
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     
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
