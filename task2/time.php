<?php

class Time{

    private int $hour ;
    private int $minute ;
    private int $second ;

    public function __construct($hour , $minute , $second)
    {
        $this->hour = $hour ;
        $this->minute = $minute ;
        $this->second = $second ;
    }

    public function getHour(){
        return $this->hour;
    }
    public function getMinute(){
        return $this->minute;
    }
    public function getSecond(){
        return $this->second;
    }
    public function setHour($hour){
        $this->hour = $hour;
    }
    public function setMinute($minute){
        $this->minute = $minute;
    }
    public function setSecond($second){
        $this->second = $second ;
    }
    public function setTime($hour,$minute,$second){
        $this->hour = $hour ;
        $this->minute = $minute ;
        $this->second = $second ;
    }
    public function toString(){
        echo $this->hour .":". $this->minute .":" . $this->second ;
    }
    public function nextSecond(){
        $second = $this->second + 1 ;
        return $second ;
    }
    public function previousSecond(){
        $second = $this->second - 1 ;
        return $second ;
    }



}