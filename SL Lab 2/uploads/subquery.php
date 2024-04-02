<?php
// Database connection parameters
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "Lab2"; // Replace with the name of your MySQL database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Subquery example: selecting data based on the result of another query
$sql_subquery = "SELECT * FROM employees WHERE salary > (SELECT AVG(salary) FROM employees)";
$result_subquery = $conn->query($sql_subquery);

if ($result_subquery->num_rows > 0) {
    echo "Employees with salary higher than the average salary:<br>";
    while($row_subquery = $result_subquery->fetch_assoc()) {
        echo "ID: " . $row_subquery["eid"]. " - Name: " . $row_subquery["name"]. " - Salary: " . $row_subquery["salary"]. "<br>";
    }
} else {
    echo "No employees found with salary higher than the average.";
}

// Close connection
$conn->close();
?>
