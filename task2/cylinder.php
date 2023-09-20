<?php

include "circle.php" ;

class Cylinder extends Circle{
    private $height ;

    public function __construct($radius= 1.0,$color= "red",$height= 1.0){
        $this->radius = $radius;
        $this->color = $color;
        $this->height = $height;
    }

    public function getHeight(){
        return $this->height;
    }
    public function setHeight($height){
        $this->height = $height;
    }

    public function getVolume(){
        $r=$this->radius;
        $h=$this->height;
        $volume = pi()* $r * $r * $h ;
        return $volume;
    }


}