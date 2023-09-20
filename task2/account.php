<?php


class Account{
    private string $id ;
    private string $name ;
    private int $balance ;

    public function __construct($id , $name ,$balance){
        $this->id = $id;
        $this->name = $name;
        $this->balance = $balance;
    }

    public function getId() {
        return $this->id ;
    }
    public function getName() {
        return $this->name ;
    }
    public function getBalance() {
        return $this->balance ;
    }
    public function credit($amount) {
        $balance = $this->balance + $amount ;
        return $balance ;
    }
    public function debit($amount) {
        if ($amount<=$this->balance) {
            $this->balance = $amount - $this->balance ;
            
        }else{
            echo "Amount Exceeded Balance" ;
        }
        return $this->balance ;
    }
    public function transferTo($amount) {
        if ($amount<=$this->balance) {
            $this->balance = $amount ;
            
        }else{
            echo "Amount Exceeded Balance" ;
        }
        return $this->balance ;
    }
    public function toString(){
        echo "Account [ Id = ". $this->id . ", Name = " . $this->name . ", Balance = " . $this->balance .   "]";
    }

}