<?php

class Father{
    public static $message="Hello, I am your father";
     public static function print20(){
        for($i=0;$i<10;$i++){
            echo self::$message."\n";

        }
    }
}
class Child extends Father{
   
}
// echo Father::$message="Hello, I am your Father\n";

//  echo child::$message="Hello, I am your Child\n";
  Child::print20();


