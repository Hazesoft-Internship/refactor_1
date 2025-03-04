<?php

abstract class Area {
    protected $x;
    protected $y;

    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function area()
    {
        echo "Area ";
    }
}

class Circle extends Area {
    private $pi = 3.144;

    public function area() {
        return $this->x * $this->x * $this->pi;
    }
}

class Rectangle extends Area
{
    public function area()
    {
        return $this->x * $this->y;
    }
}

$circle = new Circle(1,1);
echo"Area of circle = {$circle->area()}";


$rectangle= new Rectangle(5,5);
echo nl2br("\nArea of rectangle = {$rectangle->area()}");    