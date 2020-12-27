<?php
require '.\includes\common.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['email'];
$check_query="INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$run=mysqli_query($con,$check_query);  
if($item_id<=8)
{
     header("location:smartphones.php");
}
elseif ($item_id>8&&$item_id<=16) {
     header("location:clothes.php");
}
elseif($item_id>16&&$item_id<=19)
{
     header("location:smartwatches.php");
}
elseif($item_id>19&&$item_id<=23)
{
     header("location:cameras.php");
}