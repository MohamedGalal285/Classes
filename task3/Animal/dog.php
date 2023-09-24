<?php

include "mammal.php" ;

class Dog extends Mammal{

    public function __construct($name)
    {
        $this->name = $name ;
    }
    public function greets1(){
        echo "woof" ;
    }
    public function greets2(){
        echo "woooooof" ;
    }

    public function toString(){
        echo "Dog [ Mammal [ Animal [name=". $this->name . "]]]";
    }
}