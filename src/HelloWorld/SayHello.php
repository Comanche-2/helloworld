<?php

namespace HelloWorld;

class SayHello implements Hello{
    
    public static function hello(){
        return 'Hello World !, Composer';
    }
    
    public function hello_mate(){
        return "Interface";
    }
    
}


?>
