<?php include('server.php') ?>
<!DOCTYPE html>

<html>
<head>
	<title>Weight Converter System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
    <p style="padding-top:20px;text-align:right; margin-right:20px"><a href="#">Contact us</a> | <a href="#">About us</a></p>

<body>
	<div class="header">
        <center style="padding-top: 20px;"><h2>Welcome to <text style="color:green">Weight Converter System</text></h2></center>
	</div>
    <br/>

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>

		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>

		<p>Not yet a member? <a href="register.php">Sign up</a></p>

	</form>

	</body>

</html>