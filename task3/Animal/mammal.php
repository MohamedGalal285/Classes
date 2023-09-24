<?php

include "animal.php" ;

class Mammal extends Animal{

    public function __construct($name)
    {
        $this->name = $name ;
    }

    public function toString(){
        echo "Mammal [ Animal [name=". $this->name . "]]";
    }
}