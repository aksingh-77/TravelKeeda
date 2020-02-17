<?php include('server1.php')?>
<!DOCTYPE html>
<html>
<head>
<title>SignUp</title>
<link rel="stylesheet" type="text/css" href="..\CSS\add.css">
</head>
<div class="login-box">
	<!---<div class="avatar"></div>-->
	<center><h1 style="color: #ffffffff">Travel Keeda</h1></center>
	<center>
	  <h4>Welcome Traveller</h4></center>
		<form method="post" action="add.php" autocomplete="off">
		<?php include('errors.php'); ?>
		<p>Enter city name</p>
		<input type="text" name="city" placeholder="Pune, Mumbai..." value="<?php echo $city; ?>">
		<p>Places to Visit</p>
		<textarea  row="10" cols="60"  type="text" name="place" placeholder="places" value="<?php echo $place; ?>"></textarea>
		<p>Describe your place</p>
		<textarea  row="20" cols="60"  type="text" name="desp" placeholder="something about places" value="<?php echo $desp; ?>"></textarea>
		<input type="submit" name="add_place" value="sumbit">
		</form>
</div>
</body>
</html>