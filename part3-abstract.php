<?php

abstract class Father{
    public $name;
    public function sayHello(){
        return "Hello, I am $this->name";
    }
}

class Son extends Father{
    public function sayHello(){
        return "Hello, I am $this->name, the son of Rabbil";
    }
}

$son = new Son();
$son->name = "John";
echo $son->sayHello()."\n"; 
