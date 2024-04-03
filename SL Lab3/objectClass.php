<?php
class student{
    public $name;
    public $address;
    public $roll;

function set_name($name){
    this->$name = $name;
}
function set_address($address){
    $this-> $address = $address;
}
function set_roll($roll){
    $this->$roll = $roll;
}
function get_val(){
    echo "Name : ". $this -> name ."<br>";  
    echo "Address : ". $this -> address . "<br>";
    echo "Roll No. : ". $this -> roll . "<br><hr>";
    }
}

$student= new student();

$student->set_name('Ram');
$student->set_address("Kathmandu");
$student->set_roll(12);

echo "Displaying values"."<br>";
$student->get_val();
?>