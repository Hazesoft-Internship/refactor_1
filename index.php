<?php
echo "Hello, PHP is working! \n";

abstract class Shape{
    public abstract function area();
}

class Circle extends Shape{
    private $radius;

    public function __construct($radius){
        $this->radius=$radius;
    }

    function area(){
        $area=pi()*$this->radius*$this->radius;
        return $area;
    }
}
$circle=new Circle(5);
echo "The area of the circle is ".$circle->area()."\n";

class Reactangle extends Shape{
    private $length,$breadth;

    public function __construct($length,$breadth){
        $this->length=$length;
        $this->breadth=$breadth;
    }
    
    function area(){
    $area=$this->length*$this->breadth;
    return $area;
  }
}
$rect=new Reactangle(5,4);
echo "The area of the reactangle is ".$rect->area()."\n";

?>


