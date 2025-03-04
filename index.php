<?php

class Rectangle
{
    protected $length;
    protected $breadth;
    public function __construct($l, $b)
    {
        $this->length = $l;
        $this->breadth = $b;
    }

    public function calculateArea()
    {
        $area = (int) $this->length * (int) $this->breadth;
        return $area;
    }
}



// Inheritance 
class Cuboid extends Rectangle
{
    private $height;

    public function __construct($l, $b, $h)
    {
        parent::__construct($l, $b);  // calls parent constructor
        $this->height = $h;
    }

    public function calculateVolume()
    {
        $volume = (int) $this->length * (int) $this->breadth * (int) $this->height;
        return $volume;
    }
}


$rect1 = new Rectangle(2, 3);
$area1 = $rect1->calculateArea();
echo "" . "The area of the given rectangle is " . $area1 . "\n";


$cuboid1 = new Cuboid(2, 3, 4);
$volume = $cuboid1->calculateVolume();

echo "The total volume is: " . $volume;

?>