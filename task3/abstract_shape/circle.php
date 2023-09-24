<?php

include "shape.php" ;

class Circle extends Shape{

    private $radius ;

    public function __construct($color , $filled , $radius){
        $this->color = $color;
        $this->filled = $filled;
        $this->radius = $radius;
    }

    public function getRadius(){
        return $this->radius ;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function getArea(){
        $r=$this->radius;
        $area = pi()* $r * $r ;
        return $area;
    }
    public function getPerimeter(){
        $r=$this->radius;
        $perimeter = pi()* $r * 2 ;
        return $perimeter;
    }
    public function toString(){
        echo "Circle [ Color = " . $this->color . ", Filled =" . $this->filled . ", Radius =" . $this->radius ."]";
    }

}