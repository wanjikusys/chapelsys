<?php
?>
<!DOCTYPE html>
<html>

<head>

	<title>LOGIN</title>

<body>
	<form action="logon.php" method="POST">
		<link rel="stylesheet" type="text/css" href="style2.css">

		<h2>LOGIN</h2>

			<label>User Name</label>
			<input type="text" name="username" placeholder="User Name"><br>
						<label>password</label>
			<input type="password" name="password" placeholder="Password"><br>
			
			<button type="submit">Login</button>
            <p>Don't have an account?</p><a href="signup.php">sign up</a>
		</form>
	</body>
</html>
