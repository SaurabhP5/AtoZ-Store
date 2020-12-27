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
        <title>Products</title>
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
                <h1>Welcome to our AtoZ Store!</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
        </div>
            
            <!--$$$$$$$$$$$$$$ Products $$$$$$$$$$$$$$$$$$$$$-->
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-6 col-sm-6 item">
                        <img src="Images/b1.jpg" class="img-thumbnail" alt="camera">
                        <p><a href="smartphones.php" role="button" class="btn btn-primary btn-block">Shop Now</a></p>     
                    </div>    
                          <div class="col-md-6 col-sm-6 item">
                        <img src="Images/b2.jpg" class="img-thumbnail" alt="camera">
                        <p><a href="smartwatches.php" role="button" class="btn btn-primary btn-block">Shop Now</a></p>     
                    </div>   
                       </div>    
                <div class="row text-center">
                          <div class="col-md-6 col-sm-6 item">
                        <img src="Images/b3.jpg" class="img-thumbnail" alt="camera">
                        <p><a href="cameras.php" role="button" class="btn btn-primary btn-block">Shop Now</a></p>     
                    </div>   
                        
                    <div class="col-md-6 col-sm-6 item">
                        <img src="Images/b4.jpg" class="img-thumbnail" alt="camera">
                        <p><a href="clothes.php" role="button" class="btn btn-primary btn-block">Shop Now</a></p>     
                    </div>  
                </div></div>
                
            
            <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Footer $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
            
            <?php
            require '.\includes\footer.php';
            ?>
    </body>
</html>
