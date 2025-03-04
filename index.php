<?php

//  |------- Abstraction --------|
abstract class Shape {
    abstract function calculateArea();
};

class Circle extends Shape{
    private $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function calculateArea(){
        return pi() * $this->radius ** 2;
    }   
}

class Rectangle extends Shape{
    private $length, $breadth;
    public function __construct($length,$breadth){
        $this->length = $length;
        $this->breadth = $breadth;
    }
    public function calculateArea(){
        return $this->length * $this->breadth;
    }
}

$areaOfCircle = new Circle(4);
$areaOfRectangle = new Rectangle(3,4);
echo "The area of circle is: ". $areaOfCircle->calculateArea(). "\n";
echo "The area of rectangle is: ". $areaOfRectangle->calculateArea(). "\n";


// |------- Encapsulation ---------|
class ECircle {
    private $radius;

    public function __construct($radius){
        $this->setRadius($radius);
    }

    public function getRadius(){
        return $this->radius;
    }

    public function setRadius($radius){
        if($radius < 1){
            echo "Please provide valid value of radius";
        }else{
           return $this->radius = $radius;
        }
    }
}

$areaOfCircleEnscapsulation = new ECircle(4); 
echo "The value of radius from getter method is: ".$areaOfCircleEnscapsulation->getRadius()."\n";
echo "The value of radius after modifying with set method is: ".$areaOfCircleEnscapsulation->setRadius(5). "\n";


// |------ Inheritance -------|
class Shapes {
    protected $pi;
    function __construct(){
        $this->pi = pi();
    }
}

class Ecllipse extends Shapes{
    public function calculateArea($a, $b){
        return $this->pi * $a * $b;
    }
}
$areaOfEcllipse = new Ecllipse();
echo "The area of ecllipse is: ". $areaOfEcllipse->calculateArea(4,5)."\n";


// |----- Polymorphism -----|
class Triangle extends Shape {
    private $base, $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    // Overriding the method from parent class
    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

$areaOfTriangle = new Triangle(4,5);
echo "The area of triangle is: ".$areaOfTriangle->calculateArea();

?>


