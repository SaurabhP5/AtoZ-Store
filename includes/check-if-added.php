<?php
require '.\includes\common.php';
function check_if_added_to_cart($item_id)
{

$user_id = $_SESSION['email'];
$con= mysqli_connect("localhost", "root", "mysql", "store") or die(mysqli_error($con));
$check_query="SELECT * FROM user_items WHERE item_id = '$item_id' AND user_id ='$user_id' and status='Added to cart' ";
$run=mysqli_query($con,$check_query);  
 if(mysqli_num_rows($run)>0)  
    {  
     return 1;
    }
 else 
     {
     return 0;
     }
}