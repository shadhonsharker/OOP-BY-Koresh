<?php

class Father{
    public $message="Hello, I am your father";
    public function print20(){
        for($i=0;$i<20;$i++){
            echo $this->message."\n";

        }
    }
}
class child extends Father{
    public function print20(){
        for($i=0;$i<10;$i++){
            echo "Hello, I am your child\n";
        }
    }
}

$obj=new Father();
$obj->print20();

$obj2=new child();
$obj2->print20();