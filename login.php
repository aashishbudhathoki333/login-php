<?php
// Start the session so we can check whether the user is already logged in.
session_start();

// If the username is already stored in the session, send the user to the welcome page.
if (isset($_SESSION["username"])) {
	header("Location: welcome.php"); // Already logged in
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h2>Login Form</h2>
<!-- This form sends the username and password to check.php using the POST method. -->
<form action="check.php" method="POST">
	Username: <input type="text" name="username" required><br><br>
	Password: <input type="password" name="password" required><br><br>
	<button type="submit">Login</button>
</form>
</body>
</html>
