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
        <title>Sign Up</title>
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
          <br><br><br>
        
         <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Sign Up Form $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
         
         <div class="container">
             <div class="row">
                 <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>SIGN UP</h1>   
                        </div>
                        <div class="panel-body">
                            <form action="signup_script.php" method="POST">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pass" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="contact" class="form-control" placeholder="Contact">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="City">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control" placeholder="Address">
                                </div>
                        </div>
                        <div class="panel-footer">
                            <button name="signup" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                            </form>
                    </div>
                 </div>     
             </div>
         </div>
         
         <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Footer $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
         
          <?php
          require '.\includes\footer.php';
          ?>
    </body>
</html>
