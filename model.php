<?php
session_start();
$username = "charan";
$password = "262212";
$_SESSION['username'] = "charan";
$_SESSION['password'] = "262212";
if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
echo "Session started successfully!<br>";
} 
else {
echo "Session data does not match.";
}
?>