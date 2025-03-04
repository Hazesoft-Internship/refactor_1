<?php

abstract class Area{
    private float $area=0;
    abstract public function area():float;

    public function print():string{
        return "Area is: $this->area \n";
    }
}


class Circle extends Area{
    private float $r;
    private float $area;

    public function __construct(float $r){
        $this->r=$r;
    }

    public function area():float{
        $area=pi()*$this->r*$this->r;
        return $area;
    }

    public function print():string{
        return "Area of Circle is: $this->area \n";
    }

}

class Rectangle extends Area{
    private float $l;
    private float $w;
    private float $area;

    public function __construct(float $l,float $w)
    {
        $this->l=$l;
        $this->w=$w;

    }

    public function area():float{
        $area=$this->l*$this->w;
        return $area;
    }

    public function print():string{
        return "Area of Rectangle is: $this->area \n";
    }
}


$circle=new Circle(5);
echo $circle->print();
echo "\n";
$rectangle=new Rectangle(10,10);
echo $rectangle->print();

?>