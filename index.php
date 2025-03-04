<?php
abstract class Shape {
    abstract public function getArea();
}

class Circle extends Shape {
    private $radius;
    private $pi = 3.14;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea() {
        return $this->pi * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $length;
    private $breadth;

    public function __construct($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }

    public function getArea() {
        return $this->length * $this->breadth;
    }
}

$circle = new Circle(5);
$rectangle = new Rectangle(3, 2);

echo "Area of Circle is: " . $circle->getArea();
echo "<br> Area of Rectangle is: " . $rectangle->getArea();
?>