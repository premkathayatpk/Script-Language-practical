<?php
// Start the session
session_start();

// Set a cookie that expires in 1 hour
$cookie_name = "user";
$cookie_value = "prem kathayat";
setcookie($cookie_name, $cookie_value, time() + 3600, "/"); // "/" means the cookie is available throughout the entire domain

// Check if the cookie is set
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name] . "<br>";
}

// Set session variables
$_SESSION["username"] = "premkathayat";
$_SESSION["email"] = "premkathayat13@gmail.com";

echo "Session variables are set.";

// Display session variables
echo "<br>Username: " . $_SESSION["username"];
echo "<br>Email: " . $_SESSION["email"];
?>
