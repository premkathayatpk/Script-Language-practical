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

// INNER JOIN example
$sql_inner_join = "SELECT employees.eid, employees.name, department.dname 
                   FROM employees 
                   INNER JOIN department ON employees.did = department.eid";
$result_inner_join = $conn->query($sql_inner_join);

if ($result_inner_join->num_rows > 0) {
    echo "Inner Join Results:<br>";
    while($row_inner_join = $result_inner_join->fetch_assoc()) {
        echo "ID: " . $row_inner_join["eid"]. " - Name: " . $row_inner_join["name"]. " - Department: " . $row_inner_join["dname"]. "<br>";
    }
} else {
    echo "No results found.";
}

// Close connection
$conn->close();
?>
