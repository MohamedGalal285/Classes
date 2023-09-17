<?php

class Employee{

    private $id ; 
    private $firstName ; 
    private $lastName ; 
    private $salary ; 

    public function __construct($id,$firstName,$lastName,$salary){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    public function getId(){
        return $this->id;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getname(){
        $name =  $this->firstName . $this->lastName ;
        return $name;
    }
    public function getSalary(){
        return $this->salary;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getAnnualSalary(){
        $salary = $this->salary * 12 ;
        return $salary;
    }
    public function raiseSalary($perc=0.00){
        $salary = $this->salary * $perc ;
        return $salary;
    }

    public function toString(){
        echo "Employee [ Id = ". $this->id . ", First Name = " . $this->firstName . ", Last Name = " . $this->lastName . ", Salary = " . $this->salary . "]";
    }

}