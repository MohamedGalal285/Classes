<?php

class Author {
    protected string $name ;
    protected string $email ;
    protected $gender ;

    public function __construct($email , $name ,$gender){
        $this->name = $name;
        $this->email = $email;
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name ;
    }
    public function getEmail() {
        return $this->email ;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getGender() {
        return $this->gender ;
    }
    public function toString(){
        echo "Author [ email = ". $this->email . ", Name = " . $this->name . ", gender = " . $this->gender .   "]";
    }

}