<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
require '.\includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
?>

<html>
    <head>
        <title>Account</title>
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
                            <h1>ACCOUNT</h1>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action=" settings_script.php">
                                <div class="form-group">
                                    <label for="oldpass">Old password:</label>
                                    <input type="password" name="oldpass" class="form-control" id="old pass">
                                </div>
                                <div class="form-group">
                                    <label for="pass">New Password:</label>
                                    <input type="password" name="pass" class="form-control" id="pass">
                                </div>
                                 <div class="form-group">
                                    <label for="retypepass">Retype new Password:</label>
                                    <input type="password" name="retypepass" class="form-control" id="pass">
                                </div>
                                <button name="Change" type="submit" class="btn btn-primary">Submit</button>
                            </form>
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
