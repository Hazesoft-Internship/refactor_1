<?php
//  functions to calculate the area and perimeter of the different shapes.
function calculateCircleArea($radius) {
    return 3.14 * $radius * $radius;
}

function calculateCirclePerimeter ($radius) {
    return 2 * 3.14 * $radius;
}

function calculateSquareArea($length) {
    return $lenght * $lenght;
}

function calculateSquarePerimeter($lenght) {
    return 4 * $lenght;
}

function calculateRectangleArea ($lenght, $width) {
    return $lenght * $width;
}

function calculateRectanglePerimeter($lenght, $width) {
    return 2*($lenght + $width);
}

//the parent class 
class Shape {
    public $name;
    public function __construct($name) { $this->name = $name;}

    public function area(): void {
        echo "Area of " . $this->name . " is " . $this->area;
    }

    public function perimeter(): void {
        echo "Perimeter of " . $this->name . " is " . $this->perimeter;
    }
}

//the child classes(circle, square and rectangle) inherits from the parent class shape
class Circle extends Shape {
    public $radius;
    public $area;
    public $perimeter;
    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
        $this->area = calculateCircleArea($radius);
        $this->perimeter = calculateCirclePerimeter($radius);
}
}

class Square extends Shape {
    public $length;
    public function __construct($name, $length) {
        parent::__construct($name);
        $this->length = $length;
        $this->area = calculateSquareArea($length);
        $this->perimeter = calculateSquarePerimeter($length);
    }
}

class Rectangle extends Shape {
    public $length;
    public $width;
    public function __construct($name, $length, $width) {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
        $this->area = calculateRectangleArea($length, $width);
        $this->perimeter = calculateRectanglePerimeter($length, $width);
    }
}

$rect1 = new rectangle("Rectangle", 5, 10);
$rect1->area();
$rect1->perimeter();
?>