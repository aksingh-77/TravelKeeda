<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Travel Keeda </title>
    <link rel="stylesheet" type="text/css" href="CSS\login.css">   
</head>
    <body>
    <div class="login-box">
        <div class="avatar"></div>
    
        <center><h1 style="color: #ffffffff">Travel Keeda</h1></center>
        <center><h2>Login Here</h2>
        <h4>Welcome Back</h4></center>
            <form method="post" action="PHP\login.php">
            <?php include('errors.php'); ?> 
            <p>Email</p>
            <input type="text" name="Email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="HTML\forgot.html">Forget Password</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="HTML\signup.html">Dont have an account</a>
            </form>
        
        
        </div>
    
    </body>
</html>