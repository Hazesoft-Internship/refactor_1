<?php
    class AreaRectangle extends Shape {
        private $l, $b;

        public function __construct($l, $b) {
            $this->l = $l;
            $this->b = $b;
        }

        function area(){
            $areaRec = $this->l * $this->b;
            return "<br>Area of rectangle with length {$this->l} and breadth {$this->b} is: {$areaRec}" ;
        }
    }
?>