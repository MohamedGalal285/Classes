<?php

class Ball {
    private float $x;
    private float $y;
    private int $radius;
    private float $xDelta;
    private float $yDelta;

    public function __construct($x , $y ,$radius,$xDelta,$yDelta){
        $this->x = $x;
        $this->y = $y;
        $this->radius = $radius;
        $this->xDelta = $xDelta;
        $this->yDelta = $yDelta;
    }

    public function getX() {
        return $this->x ;
    }
    public function setX($x) {
        $this->x = $x ;
    }
    public function getY() {
        return $this->y ;
    }
    public function setY($y) {
        $this->y = $y ;
    }
    public function getRadius() {
        return $this->radius ;
    }
    public function setRadius($radius) {
        $this->radius = $radius ;
    }
    public function getXdelta() {
        return $this->xDelta ;
    }
    public function setXdelta($xDelta) {
        $this->xDelta = $xDelta ;
    }
    public function getYdelta() {
    return $this->yDelta ;
    }
    public function setYdelta($yDelta) {
        $this->yDelta = $yDelta ;
    }

    public function move(){
        $this->x +=  $this->xDelta ;
        $this->y +=  $this->yDelta ;
    }
    public function reflectHorizontal(){
        $this->x -=  $this->xDelta ;
    }
    public function reflectVertical(){
        $this->y -=  $this->yDelta ;
    }

    public function toString(){
        echo "Ball [(". $this->x . "," . $this->y . ") , Speed = (" . $this->xDelta . "," . $this->yDelta . ")]";
    }

}