<?php

//babar constructor cele paise karon celer ni
class Father{
    public function __construct(){
        echo "I am your father\n";
    }
}

class Son extends Father{
 
}



new Son();
//baba cele duijon er constructor ase keu karo day nay na

// class Father{
//     public function __construct(){
//         echo "I am your father\n";
//     }
// }

// class Son extends Father{
//    public function __construct(){
        
//         echo "I am your son\n";
//     }
// }


// new Father();
// new Son();

//celer abba abba bole cheye nise tai cele both paise abr baba o nije nije k call korte pare

// class Father{
//     public function __construct(){
//         echo "I am your father\n";
//     }
// }

// class Son extends Father{
//    public function __construct(){
//         parent::__construct();
//         echo "I am your son\n";
//     }
// }



// new Son();