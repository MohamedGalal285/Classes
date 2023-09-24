<?php

abstract class Shape {

    protected $color ;
    protected $filled ;

    public function __construct($color , $filled){
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor(){
        return $this->color ;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function isFilled(){
        return $this->filled ;
    }
    public function setFilled($filled){
        $this->filled = $filled;
    }
    public abstract function getArea();
    public abstract function getPerimeter();

    public function toString(){
        echo "Shape [ Color = " . $this->color . ", Filled =" . $this->filled ."]";
    }

}