<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System PHP and MySql</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

	<div class="header">
		<center style="padding-top: 20px"><h2>Register Here...</h2></center>
	</div>
    <br/>

	<form method="post" action="register.php"><?php include('errors.php');?>
        
        <div class="input-group">
            <label>First Name</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>">
        </div>
        
        <div class="input-group">
            <label>Middle Name</label>
            <input type="text" name="middlename" value="<?php echo $middlename; ?>">
        </div>
        
        <div class="input-group">
            <label>Last Name</label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>">
        </div>

	<div class="input-group">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>

	<div class="input-group">
		<label>Email</label>
		<input type="text" name="email" value="<?php echo $email; ?>">
	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password_1">
	</div>

	<div class="input-group">
		<label>Confirm Password</label>
		<input type="password" name="password_2">
	</div>

	<div class="input-group">
		<button type="submit" class="btn" name="reg_user">Register</button>
	</div>

	<p>Already a member? <a href="login.php">Sign in</a></p>

	</form>

</body>
</html>>