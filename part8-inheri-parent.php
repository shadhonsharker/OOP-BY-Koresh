<?php

class Father{
    public $num1=100;
    public $num2=200;

    public function addTwo(){
        return $this->num1+$this->num2;
    }
}

class Son extends Father{
    public function MultiplyTwo(){
        $addFather=parent::addTwo();
        echo $addFather*2;
    }
}

$obj=new Son();
$obj->MultiplyTwo();
