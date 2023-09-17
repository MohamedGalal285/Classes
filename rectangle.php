<?php

class Rectangle{
    private $length;
    private $width ;

    public function __construct($length= 1.0,$width= 1.0){
        $this->length = $length;
        $this->width = $width;
    }

    public function getLength(){
        return $this->length;
    }
    public function setLength($length){
        $this->length = $length;
    }
    public function getWidth(){
        return $this->width;
    }
    public function setWidth($width){
        $this->width = $width;
    }
    public function getArea(){
        $area = $this->length * $this->width;
        return $area;
    }
    public function getPerimeter(){
        $perimeter = ($this->length + $this->width) * 2 ;
        return $perimeter;
    }
    public function toString(){
        echo "Rectangle [ Length = ". $this->length . ", Width = " . $this->width . "]";
    }
}
