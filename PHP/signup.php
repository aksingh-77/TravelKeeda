<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<link rel="stylesheet" type="text/css" href="..\CSS\signup.css">
</head>
<div class="login-box">
	<!---<div class="avatar"></div>-->
	<center><h1 style="color: #ffffffff">Travel Keeda</h1></center>
	<center><h2>Sign Up Here</h2>
	  <h4>Welcome Traveller</h4></center>
		<form method="post" action="signup.php" autocomplete="off">
		<?php include('errors.php'); ?>
		<p>NAME</p>
		<input type="text" name="name" placeholder="NAME" value="<?php echo $username; ?>">
		<p>Email-ID</p>
		<input type="email" name="email" placeholder="Email _id" value="<?php echo $email; ?>">
		<p>Password</p>
		<input type="password" name="password_1" placeholder="Enter Password">
		<p>Re-Type Password</p>
		<input type="Password" name="password_2" placeholder="Retype-Password"/>
		<input type="submit" name="reg_user" value="submit">
		<a href="..\HTML\login.html">Already have an account </a>    
        </form>
        <script type="text/javascript" src="..\email.js"></script>
        
</div>
</body>
</html>