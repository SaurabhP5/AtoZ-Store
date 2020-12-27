
<?php  

$con= mysqli_connect("localhost", "root", "mysql", "appDetails") or die(mysqli_error($con));

    $v_name=$_GET['vname']; 
    $v_code=$_GET['vcode'];  
  
  
    if($version_name=='')  
    {  
        echo"<script>alert('Please enter the version name')</script>";  
        exit();
    }  
  
    if($version_code=='')  
    {  
        echo"<script>alert('Please enter the version code')</script>";  
        exit();  
    }    
  
  
    $insert_app_details="insert into appDetails (vname,vcode) VALUE ('$v_name','$v_code')";  
    mysqli_query($con,$insert_user);   
  
?>