<?php

// Parent class Employee
class Employee {
    // Properties
    protected $name;
    protected $address;

    // Constructor
    public function __construct($name, $address) {
        $this->name = $name;
        $this->address = $address;
    }

    // Setters
    public function setName($name) {
        $this->name = $name;
    }

    public function setAddress($address) {
        $this->address = $address;
    }
}

// Child class Permanent inheriting from Employee
class Permanent extends Employee {
    // Additional properties
    private $salary;
    private $post;

    // Constructor
    public function __construct($name, $address, $salary, $post) {
        parent::__construct($name, $address); // Call parent constructor
        $this->salary = $salary;
        $this->post = $post;
    }

    // Setters
    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function setPost($post) {
        $this->post = $post;
    }

    // Display all details
    public function displayAll() {
        echo "Name: " . $this->name . "<br>";
        echo "Address: " . $this->address . "<br>";
        echo "Salary: $" . $this->salary . "<br>";
        echo "Post: " . $this->post . "<br>";
    }
}

// Create 20 students
$students = [];
for ($i = 1; $i <= 20; $i++) {
    $student = new Permanent("Employee$i", "Address$i", 5000 * $i, "Post$i");
    $students[] = $student;
}

// Display details of all students
foreach ($students as $student) {
    $student->displayAll();
    echo "<br>";
}
?>
