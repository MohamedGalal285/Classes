<?php

include "person.php" ;

class Staff extends Person{
    private $school ;
    private $pay ;

    public function __construct($name , $address , $school , $pay ){
        $this->name = $name;
        $this->address = $address;
        $this->school = $school;
        $this->pay = $pay;
    }

    public function getScool(){
        return $this->school ;
    }
    public function setScool($school){
        $this->school = $school;
    }
    public function getPay(){
        return $this->pay ;
    }
    public function setPay($pay){
        $this->pay = $pay;
    }

    public function toString(){
        echo "Staff [ name = " . $this->name . ", Address =" . $this->address . ", School =" . $this->school . ", Pay =" . $this->pay . "]";
    }

}