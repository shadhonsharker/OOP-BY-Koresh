<?php 

class Calculator{
    public static function add($a,$b){
        return $a+$b;
    }
    public static function subtract($a,$b){
        return $a-$b;
    }
    public static function multiply($a,$b){
        return $a*$b;
    }
    public static function divide($a,$b){
        if($b==0){
            return "Cannot divide by zero";
        }
        return $a/$b;
    }
}
echo calculator::add(10,5)."\n"; // Output: 15
echo calculator::subtract(10,5)."\n"; // Output: 5
echo calculator::multiply(10,5)."\n"; // Output: 50
echo calculator::divide(10,5)."\n"; // Output: 2
echo calculator::divide(10,0)."\n"; // Output: Cannot divide by zero
