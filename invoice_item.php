<?php

class InvoiceItem
{
    private $id ;
    private $desc ;
    private $qty ;
    private $unitPrice ;

    public function __construct($id,$desc,$qty,$unitPrice){
        $this->id = $id;
        $this->desc = $desc;
        $this->qty = $qty;
        $this->unitPrice = $unitPrice;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getDesc()
    {
        return $this->desc;
    }

    public function getQty()
    {
        return $this->qty;
    }
    public function setQyt($qty){
        $this->qty = $qty;
    }
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }
    public function setUnitPrice($unitPrice){
        $this->unitPrice = $unitPrice;
    }
    public function getTotal()
    {
        $total = $this->unitPrice * $this->qty ;
        return $total;
    }

    public function toString(){
        echo "InvoiceItem [ Id = ". $this->id . ", Desc = " . $this->desc . ", Qty = " . $this->qty . ", UnitPrice = " . $this->unitPrice . "]";
    }

}