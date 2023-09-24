<?php

include "rectangle.php" ;

class Square extends Rectangle{

    public function __construct($color , $filled , $length , $width , $side){
        $this->color = $color;
        $this->filled = $filled;
        $this->length = $length;
        $this->width = $width;
    }

    public function getSide(){
        return $this-> length;
    }
    public function setSide($side){
        $this->length = $side;
    }
    public function setLength($side){
        $this->length = $side;
    }
    public function setWidth($side){
        $this->width = $side;
    }

    public function toString(){
        echo "Square [ Color = " . $this->color . ", Filled =" . $this->filled . ", Length =" . $this->length . ", Width =" . $this->width ."]";
    }

}