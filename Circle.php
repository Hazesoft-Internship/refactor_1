<?php
require_once("Shape.php");

class Circle extends Shape{
    public $radius;

    public function __construct($radius)
    {
        
        $this->radius=$radius;
        $this->result=0;
    }

    function calculateArea(){
        $this->result=pi()*$this->radius*$this->radius;
    }

   
   
}
?>