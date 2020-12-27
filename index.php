<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require '.\includes\common.php';
if (isset($_SESSION['email'])) 
    {   
    header('location: products.php'); 
    } 
 
?>
<html>
    <head>
        <title>Home</title>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <link type="text/css" href="style.css" rel="stylesheet"> 
        <link rel="shortcut icon" href="Images/fav.ico">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Navigation Bar/Header $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
        
          <?php
          require '.\includes\header.php';
          ?>
        
          <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Content $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->   
          
          <div id="banner_image">
              <div class="container">
                  <div id="banner_content">
                      <h1>Smartphones? Fashion? Cameras? we've got you covered.</h1>
                        <p>Exciting offers everyday! COD available!</p>
                      <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                  </div>
              </div>
          </div>
         <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p21.jpg" class="img-thumbnail" alt="camera">
                    </div>    
                     <div class="col-md-3 col-sm-6 item">    
                        <img src="Images/p9.jpg" class="img-thumbnail" alt="clothes">
                     </div>   
                     <div class="col-md-3 col-sm-6 item">   
                        <img src="Images/p12.jpg" class="img-thumbnail" alt="clothes">
                     </div>
                     <div class="col-md-3 col-sm-6 item">
                        <img src="Images/p23.jpg" class="img-thumbnail" alt="camera">
                    </div>
                </div>
            </div>
         
        <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Footer $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
        
        <?php
          require '.\includes\footer.php';
        ?>
        
    </body>
</html>
