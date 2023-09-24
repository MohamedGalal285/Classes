<?php

include "shape.php" ;

class Rectangle extends Shape{

    protected $length ;
    protected $width ;

    public function __construct($color , $filled , $length , $width){
        $this->color = $color;
        $this->filled = $filled;
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength(){
        return $this->length ;
    }
    public function setLength($length){
        $this->length = $length;
    }
    public function getWidth(){
        return $this->width ;
    }
    public function setWidth($width){
        $this->width = $width;
    }
    public function getArea(){
        $l=$this->length;
        $w=$this->width;
        $area = $l * $w ;
        return $area;
    }
    public function getPerimeter(){
        $l=$this->length;
        $w=$this->width;
        $perimeter = ($l + $w) * 2 ;
        return $perimeter;
    }
    public function toString(){
        echo "Rectangle [ Color = " . $this->color . ", Filled =" . $this->filled . ", Length =" . $this->length . ", Width =" . $this->width ."]";
    }

}