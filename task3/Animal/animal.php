<?php

class Animal{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name ;
    }

    public function toString(){
        echo "Animal [name=". $this->name . "]";
    }
}