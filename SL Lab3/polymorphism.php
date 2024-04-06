<?php
interface Shape {
    public function getArea();
}
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }
}
$circle = new Circle(5);
$rectangle = new Rectangle(10, 7);

echo "The area of the circle is: " . $circle->getArea() . "<br>";
echo "The area of the rectangle is: " . $rectangle->getArea() . "<br>";
?>
