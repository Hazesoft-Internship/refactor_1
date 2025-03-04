<?php 

// function ac(){
//     $pi = 3.14;
//     $radius = 2;
//     $aoc = $pi * pow($radius,2);
//     echo "Area of Circle: ".$aoc;
// }
    
// function ar(){
//     $length = 5;
//     $breadth = 5;
//     $aor = $length * $breadth;
//     echo "<br> <b>Area of Rectangle: </b>" .$aor;
// }   
  
// ac();
// ar();

//implementing abstraction
abstract class Features{
    protected $area;

    abstract protected function calculateArea();

}

//implementing inheritance along with encapsulation
class Values extends Features{
    private $pi = 3.14;
    private $radius;
    private $length;
    private $breadth;

    public function setRadius($radius){
        $this->radius = $radius;
    }

    public function setDimensions($length, $breadth) {
        $this->length = $length;
        $this->breadth = $breadth;
    }



    protected function calculateArea() {
        if ($this->radius) {
            $this->area = $this->pi * pow($this->radius, 2);
            echo "<br> <b>Area of Circle: </b>" . $this->area;
        } elseif ($this->length && $this->breadth) {
            $this->area = $this->length * $this->breadth;
            echo "<br> <b>Area of Rectangle: </b>" . $this->area;
        }
    }

    public function ac($radius){
        $this->setRadius($radius);
        $this->calculateArea();
    }

    public function ar($length, $breadth){
        $this->setDimensions($length, $breadth);
        $this->calculateArea();
    }
}

$display = new Values();
$display->ac(5);
$display->ar(10,10);

//implementing polymorphism
$display2 = new Values();
$display2-> ac(7);
$display2-> ar(9,9);






?>    