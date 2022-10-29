<?php
class languages
{
    public $name = "PHP-PHP<br>";
    public $property = "Back End";
    public const message = "hello oop";
    function ozgur()
    {
        return "ozgur";
    }
    public function myMethod()
    {
        $text = self::message; //class içinden sabitlere böyle ulaşılır
        return "first oop method";
        $textTwo = self::ozgur(); //class içinden function böyle çağırılır $this->functionName şeklinde de çağrılabilir
    }
}
