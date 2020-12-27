<html>
    <head>
        <title>Success</title>
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
          ?><br><br><br><br><br><br><br>
        
<?php
require '.\includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
$user_id = $_SESSION['user_id'];
$query = "UPDATE `user_items` SET `status` = 'Confirmed' WHERE `user_id` = '$user_id'";
$result = mysqli_query($con,$query);?>
          
           <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Navigation Bar/Header $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
        
          <?php
          require '.\includes\header.php';
          ?>
        
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Thank You!</h3>
                        </div>
                         <div class="panel-body">
                         <p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item. </p>
                         </div>
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
