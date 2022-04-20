<!DOCTYPE html>
<html>

<head>

	<title>LOGIN</title>
<body>
	<form action="signupdb.php" method="POST">
<link rel="stylesheet" type="text/css" href="style2.css">
		<h2>Signup</h2>

		<label>First Name:</label>
		<input type="text" name="fname" required><br>
		<label>Last Name:</label>
		<input type="text" name="lname" required><br>
		<label>email:</label>
		<input type="email" name="email" required><br>
		<label>username:</label>
		<input type="text" name="username" required><br>
		<label>password:</label>
		<input type="password" name="password" minlength="8" required><br>

			
			<button type="submit">Submit</button>
            <p>Already have an account?</p><a href="login.php">login</a>
		</form>
	</body>
</html>
