<?php
require_once("Shape.php");
class Rectangle extends Shape{
    public $weight,$height;

    public function __construct($weight,$height)
    {
        
        $this->weight=$weight;
        $this->height=$height;
        $this->result=0;
    }

    function calculateArea(){
        $this->result=$this->weight*$this->height;
    }

}
?>