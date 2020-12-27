<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!-- php script to create connection with DB -->

<?php
$con= mysqli_connect("localhost", "root", "mysql", "appDetails") or die(mysqli_error($con));
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>App Details</title>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">

        <!-- jQuery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
             <div class="row">
                 <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h1>App Details</h1>   
                        </div>
                        <div class="panel-body">
                            <form action="app_details_script" method="GET">
                                <div class="form-group">
                                    <input type="text" name="vname" class="form-control" placeholder="Version Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="vcode" class="form-control" placeholder="Version Code">
                                </div>
                                <div class="form-group">
                                <button name="update" type="submit" class="btn btn-default">Update</button>
                                </div>
                        </div>
                        <div class="panel-footer">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>
                    </div>
                 </div>     
             </div>
         </div>
    </body>
</html>