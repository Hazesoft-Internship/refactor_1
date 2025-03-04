<?php
    class AreaCircle extends Shape {
        private $r;

        public function __construct($r) {
            $this->r = $r;
        }

        function area() {
            $area = pi() * ($this->r ^ 2);
            return ("Area of circle with radius {$this->r} is: {$area}");
        }
    }
?>