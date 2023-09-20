<?php
class Date{
    private int $day;
    private int $month;
    private int $year;

    public function __construct($day,$month,$year)
    {
        $this->day =$day;
        $this->month =$month;
        $this->year =$year;
    }

    public function getDay(){
        return $this->day;
    }
    public function getMonth(){
        return $this->month;
    }
    public function getYear(){
        return $this->year;
    }
    public function setDay($day){
        $this->day = $day;
    }
    public function setMonth($month){
        $this->month = $month;
    }
    public function setYear($year){
        $this->year = $year;
    }
    public function  setDate($day,$month,$year){
        $this->day = $day;
        $this->month = $month;
        $this->year = $year;
    }
    public function toString(){
        echo $this->day ."/". $this->month ."/" . $this->year ;
    }

}






