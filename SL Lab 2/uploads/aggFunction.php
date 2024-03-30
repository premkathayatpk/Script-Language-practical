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

// SUM aggregate function
$sql_sum = "SELECT SUM(salary) AS total_salary FROM employees";
$result_sum = $conn->query($sql_sum);
$row_sum = $result_sum->fetch_assoc();
$total_salary = $row_sum["total_salary"];
echo "Total Salary: " . $total_salary . "<br>";

// AVG aggregate function
$sql_avg = "SELECT AVG(salary) AS avg_salary FROM employees";
$result_avg = $conn->query($sql_avg);
$row_avg = $result_avg->fetch_assoc();
$avg_salary = $row_avg["avg_salary"];
echo "Average Salary: " . $avg_salary . "<br>";

// COUNT aggregate function
$sql_count = "SELECT COUNT(*) AS total_employees FROM employees";
$result_count = $conn->query($sql_count);
$row_count = $result_count->fetch_assoc();
$total_employees = $row_count["total_employees"];
echo "Total Employees: " . $total_employees . "<br>";

// Close connection
$conn->close();
?>
