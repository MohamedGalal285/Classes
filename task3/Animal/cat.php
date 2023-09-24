<?php

include "mammal.php" ;

class Cat extends Mammal{

    public function __construct($name)
    {
        $this->name = $name ;
    }
    public function greets(){
        echo "Meow" ;
    }

    public function toString(){
        echo "cat [ Mammal [ Animal [name=". $this->name . "]]]";
    }
}