<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require '.\includes\common.php';
?>

<html>
    <head>
        <title>Login</title>
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
        
        <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ Navigation Bar $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
        
        <?php
          require '.\includes\header.php';
        ?>
        <br><br><br><br>
        
        <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ Login form $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>LOGIN</h1>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pass">Password:</label>
                                    <input type="password" name="pass" class="form-control" id="pass">
                                </div>
                                <button name="login" type="submit" class="btn btn-primary">Sign In</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            Don't have an account?<a href="signup.html">Register</a>
                        </div>   
                    </div>
                </div>
            </div>        
        </div>
        
         <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ Footer $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
         
          <?php
          require '.\includes\footer.php';
          ?>
    </body>
</html>
