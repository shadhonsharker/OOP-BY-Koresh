<?php
class Gadha{
    public function __call($name, $args){
        if($name=="rabbil"){
            echo "Hello, I am $args[0] and I am from $args[1]\n";
        }
        if($name=="koresh"){
            echo "Hello, I am $args[0] and I am from $args[1]";

        }

        print_r($args);
    }
}
$objgadha=new Gadha();
$objgadha->rabbil("Rabbil","Dhaka",20);
$objgadha->koresh("Koresh","Bogura");