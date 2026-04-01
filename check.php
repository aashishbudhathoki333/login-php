<?php
// Start the session so we can save login information after checking the form data.
session_start();

// Fake credentials (for demo only)
$correct_username = "krishna";
$correct_password = "1234";

// Read the values sent from login.php.
$uname = $_POST["username"];
$pass = $_POST["password"];

// If both values match, store the username in the session and move to the welcome page.
if ($uname === $correct_username && $pass === $correct_password) {
	$_SESSION["username"] = $uname;
	header("Location: welcome.php");
	exit();
} else {
	// If the login details are wrong, show a simple message and a link back to the form.
	echo "Invalid username or password. <a href='login.php'>Try again</a>";
}
?>
