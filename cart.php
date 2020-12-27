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
        <title>Cart</title>
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
          ?><br><br><br><br>
        
        <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Content $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3>Congratulations! You are just one step away.</h3>
                        </div>
                        <div class="panel-body">
                        <table class=" table table-striped">
                                                <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM user_items JOIN items ON user_items.item_id = items.id WHERE user_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($con,$query);
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id="";
                                    $id .= $row["id"] . ",";
                                    echo "<tr>
                                              <td>" . "#" . $row["id"] . "</td>
                                              <td>" . $row["Name"] . "</td>
                                              <td>Rs " . $row["Price"] . "</td>
                                              <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove </a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ",");
                                echo "<tr>
                                          <td></td>
                                          <td>Total</td>
                                          <td>Rs " . $sum . "</td>
                                          <td><a href='success.php?itemsid=".$id ."'class='btn btn-primary'>Confirm Order</a></td>
                                          </tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center><h2>Looks like there is nothing in your cart yet, keep shopping!</h2></center>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
             </div>
                </div></div>
        
        <!--$$$$$$$$$$$$$$$$$$$$$$$$$$$ Footer $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
            
          <?php
          require '.\includes\footer.php';
          ?>
    </body>
</html>
