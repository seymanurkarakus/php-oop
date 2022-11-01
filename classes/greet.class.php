<?php 
 class greet {
    function __construct()
    {
        echo" __construct() self ile aynı class taki fonksiyonu çağırdı :  ". self::welcome();
    }
     public static function welcome(){
        $text="hello php oop";
        return $text;
     }
}
?>