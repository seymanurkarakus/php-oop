<?php

class pi{
    public static $number=3.14159;
    function staticValue(){
        return "pi sayısı ". self::$number;
    }
}
