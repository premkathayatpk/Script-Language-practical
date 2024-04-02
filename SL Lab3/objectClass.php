<?php

// Define a class called Person
class Person {
    // Properties
    public $name;
    public $age;
    
    // Constructor method
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    // Method to display information about the person
    public function displayInfo() {
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

// Create objects of the Person class
$person1 = new Person("Ram", 30);
$person2 = new Person("Sita", 25);

// Display information about the persons
echo "Person 1:<br>";
$person1->displayInfo();
echo "<br>";

echo "Person 2:<br>";
$person2->displayInfo();
?>
