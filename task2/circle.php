<?php

class Circle {

    protected $radius;
    protected $color ;

    public function __construct($radius= 1.0,$color= "red"){
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius(){
        return $this->radius;
    }
    public function getColor(){
        return $this->color;
    }
    public function setRadius($radius){
        $this->radius = $radius;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function getArea(){
        $r=$this->radius;
        $area = pi()* $r * $r ;
        return $area;
    }

    public function toString(){
        echo "Circle [ Radius = ". $this->radius . ", color = " . $this->color . "]";
    }
} 