<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Travel Keeda </title>
    <link rel="stylesheet" type="text/css" href="..\CSS\login.css">   
</head>
    <body>
    <div class="login-box">
        <div class="avatar"></div>
    
        <center><h1 style="color: #ffffffff">Travel Keeda</h1></center>
        <center><h2>Login Here</h2>
        <h4>Welcome Back</h4></center>
            <form method="post" action="login.php">
            <?php include('errors.php'); ?> 
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <button type="submit" class="btn" name="login_user">Login</button>
            <a href="..\HTML\forgot.html">Forget Password</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="signup.php">Dont have an account</a>
            </form>
        
        
        </div>
    
    </body>
</html>