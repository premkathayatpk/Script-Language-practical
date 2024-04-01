<?php
include ('connection.php');

// SQL to create table
$sql_create_table = "CREATE TABLE IF NOT EXISTS student (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50)
  
)";

if ($conn->query($sql_create_table) === TRUE) {
    echo "Table 'student' created successfully!<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// SQL to insert data into the table
$sql_insert_data = "INSERT INTO student (firstname, lastname, email)
VALUES ('Ram', 'Bhatta', 'rambhatta12@gmail.com'),
       ('prem', 'kathayat', 'premkathayat13@gmail.com'),
       ('Sita', 'KC', 'sitakc11@gmail.com')";

if ($conn->query($sql_insert_data) === TRUE) {
    echo "Data inserted successfully!<br>";
} else {
    echo "Error inserting data: " . $conn->error . "<br>";
}

// Close connection
$conn->close();
?>
