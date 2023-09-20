<?php

include "author.php";

class Book extends Author {
    private string $name;
    private $author ;
    private $price;
    private $qty = 0 ;

    public function __construct(Author $author , $name ,$price , $qty){
        $this->name = $name;
        $this->author = $author;
        $this->price = $price;
        $this->qty = $qty;
    }

    public function getName() {
        return $this->name ;
    }
    public function getAuthor() {
        return $this->author ;
    }
    public function getPrice() {
        return $this->price ;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    public function getQty() {
        return $this->qty ;
    }
    public function setQty($qty){
        $this->qty = $qty;
    }
    public function toString(){
        echo "Book [ name = ". $this->name . "," ."Author [ email = ". $this->author->email . ", Name = " . $this->author->name . ", gender = " . $this->author->gender . "]" . "," ." price = " . $this->price . ", qty = " . $this->qty . "]"   ;
    }


}

$author = new Author('m@gmail.com','mohamed','m');