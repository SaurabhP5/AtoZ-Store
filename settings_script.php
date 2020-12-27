<?php  
require '.\includes\common.php';
if(!isset($_SESSION['email']))
{
    header('location: index.php');
}
if (isset($_POST['Change']))
{
$user_id = $_SESSION['user_id'];
$old_password = $_POST['oldpass'];
$new_password = $_POST['pass'];
$retype_new_password = $_POST['retypepass'];
if($old_password=='')  
    {  
        echo"<script>alert('Please enter the old password')</script>";  
        exit();
    }  
  
    if($new_password=='')  
    {  
        echo"<script>alert('Please enter the new password')</script>";  
        exit();  
    }  
  
    if($retype_new_password=='')  
    {  
        echo"<script>alert('Please re-enter the new password')</script>";  
        exit();  
    }  
    if($retype_new_password!=$new_password)  
    {  
        echo"<script>alert('New passwords do not match')</script>";  
        exit();  
    }  

$query = "SELECT * FROM users WHERE email='$user_id' AND password='$old_password'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$count = mysqli_num_rows($result);
if ($count == 1){
$query = "UPDATE `users` SET `password` = '$new_password' WHERE `email` = '$user_id'";
$run = mysqli_query($con, $query) or die(mysqli_error($con));
echo"<script>alert('Password changed successfully!')</script>"; 
}
else
{

echo"<script>alert('Please try again!')</script>"; 
}
}
