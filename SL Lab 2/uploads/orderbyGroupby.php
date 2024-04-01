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

// ORDER BY clause
$sql_order_by = "SELECT * FROM employees ORDER BY salary DESC";
$result_order_by = $conn->query($sql_order_by);

if ($result_order_by->num_rows > 0) {
    echo "Employees sorted by salary in descending order:<br>";
    while($row_order_by = $result_order_by->fetch_assoc()) {
        echo "ID: " . $row_order_by["eid"]. " - Name: " . $row_order_by["name"]. " - Salary: " . $row_order_by["salary"]. "<br>";
    }
} else {
    echo "No employees found.";
}

// GROUP BY clause
$sql_group_by = "SELECT department, COUNT(*) AS num_employees FROM employees GROUP BY department";
$result_group_by = $conn->query($sql_group_by);

if ($result_group_by->num_rows > 0) {
    echo "<br>Number of employees in each department:<br>";
    while($row_group_by = $result_group_by->fetch_assoc()) {
        echo "Department: " . $row_group_by["department"]. " - Number of Employees: " . $row_group_by["num_employees"]. "<br>";
    }
} else {
    echo "<br>No departments found.";
}

// Close connection
$conn->close();
?>
