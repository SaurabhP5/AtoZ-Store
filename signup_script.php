<?php

require '.\includes\common.php';

if(isset($_POST['signup']))  
{  
    $user_name=$_POST['name']; 
    $user_pass=$_POST['pass'];
    $user_email=$_POST['email'];  
    $user_contact=$_POST['contact'];
    $user_city=$_POST['city'];
    $user_address=$_POST['address'];
    
  
  
    if($user_name=='')  
    {  
        echo"<script>alert('Please enter the name')</script>";  
        exit();
    }  
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
        exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
        exit();  
    }  
     if($user_contact=='')  
    {  
        echo"<script>alert('Please enter the contact number')</script>";  
        exit();
    }  
     if($user_city='')  
    {  
        echo"<script>alert('Please enter the city')</script>";  
        exit();
    }  
     if($user_address='')  
    {  
        echo"<script>alert('Please enter the addressa')</script>";  
        exit();
    }  
  

    $check_email_query="select * from users WHERE email='$user_email'";  
    $run_query=mysqli_query($con,$check_email_query);  
  
    if(mysqli_num_rows($run_query)>0)  
    {  
echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";  
exit();  
    }  
    $insert_user="insert into users (name,password,email,contact,city,address) VALUE ('$user_name','$user_pass','$user_email','$user_contact','$user_city','$user_address')";  
    if(mysqli_query($con,$insert_user))  
    {  
        $_SESSION['user_id'] = $email;
        $_SESSION['email'] = $email;
        header('location: products.php');
    }  
  
  
  
}

