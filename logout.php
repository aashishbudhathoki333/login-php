<?php
// Start the session so PHP knows which session we want to clear.
session_start();
session_unset(); // Remove all session variables
session_destroy(); // Destroy session
// After logout, return the user to the login page.
header("Location: login.php");
exit();
?>
