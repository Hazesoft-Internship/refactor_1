<?php
    abstract class Shape{
        protected $result;
        abstract public function calculateArea();

         public function getArea(){
            return $this->result."<br/>";
        }
    }
?>