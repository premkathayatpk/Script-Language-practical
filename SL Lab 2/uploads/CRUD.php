<?php
include ('connection.php');

// CREATE operation - Insert a new record into the database
$sql_create = "INSERT INTO student (firstname, lastname, email) VALUES ('Shyam', 'Joshi', 'shyam134@gmail.com')";
if ($conn->query($sql_create) === TRUE) {
    echo "New record created successfully!<br>";
} else {
    echo "Error: " . $sql_create . "<br>" . $conn->error;
}

// READ operation - Retrieve records from the database
$sql_read = "SELECT * FROM student";
$result = $conn->query($sql_read);

if ($result->num_rows > 0) {
    echo "<br>Records retrieved successfully:<br>";
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    echo "<br>No records found.";
}

// UPDATE operation - Update an existing record in the database
$sql_update = "UPDATE student SET email='premupdatedemail@gmail.com' WHERE firstname='Prem'";
if ($conn->query($sql_update) === TRUE) {
    echo "<br>Record updated successfully!<br>";
} else {
    echo "<br>Error updating record: " . $conn->error;
}

// DELETE operation - Delete a record from the database
$sql_delete = "DELETE FROM student WHERE firstname='Shyam'";
if ($conn->query($sql_delete) === TRUE) {
    echo "Record deleted successfully!<br>";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close connection
$conn->close();
?>
