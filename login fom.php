<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <style>
        body{background-color: goldenrod;}
        header,footer{color:brown;text-align: center;background-color: goldenrod;}     
    </style>
</head>
<body>
    <div class="containner" style="text-align: center;padding-left: 300px;padding-right: 300px;">
    <h1><b><i>LOGIN</i></b></h1>
    <form method="post" action="login form.php" style="display: grid">
        <div class="form-group">
        Password: <input type="password" class="form-control" id="pass" name="pass" required><br>
        </div>
        <div class="form-group">
         Email: <input type="email" class="form-control" id="email" name="email" required><br>
    </div>
        <input type="submit" class="btn btn-warning" value="LOGIN">
    </form>
    </div>
    <div>
        <p style="text-align: center;">If not registere,<a href="registration form.html"> Registration.</a>Forgot your password?</p>
    </div>
    <script src="jquery-3.7.0.min.js"></script>  
    <script src="bootstrap.bundle.min.js"></script> 
</body>
</html>