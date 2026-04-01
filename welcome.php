<?php
// Start the session so we can read the stored username.
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
<!-- Show the username that was saved in the session after login. -->
<h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
<p>You are now logged in.</p>
<a href="logout.php">Logout</a>
</body>
</html>
