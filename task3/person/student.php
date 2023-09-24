<?php

include "person.php" ;

class Student extends Person{
    private $program ;
    private $year ;
    private $fee ;

    public function __construct($name , $address , $program , $year ,$fee){
        $this->name = $name;
        $this->address = $address;
        $this->program = $program;
        $this->year = $year;
        $this->fee = $fee;
    }

    public function getProgram(){
        return $this->program ;
    }
    public function setProgram($program){
        $this->program = $program;
    }
    public function getYear(){
        return $this->year ;
    }
    public function setYear($year){
        $this->year = $year;
    }
    public function getFee(){
        return $this->fee ;
    }
    public function setFee($fee){
        $this->fee = $fee;
    }

    public function toString(){
        echo "Student [ name = " . $this->name . ", Address =" . $this->address . ", Program =" . $this->program . ", Year =" . $this->year . ", Fee =" . $this->fee . "]";
    }

}