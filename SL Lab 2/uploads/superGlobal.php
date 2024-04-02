<!DOCTYPE html>
<html>
<head>
    <title>Form Handling in PHP</title>
</head>
<body>

<h2>Form Handling using Super Globals</h2>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data using $_POST superglobal
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validate the input (for demonstration purpose only)
    if (!empty($name) && !empty($email)) {
        echo "<h3>Form Submitted Successfully</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    } else {
        echo "<h3>Please fill in all fields</h3>";
    }
}
?>

</body>
</html>
