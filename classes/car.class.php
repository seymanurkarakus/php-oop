<?php
abstract class car  //soyut class tanımlaması 
{
    public $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    abstract public function info(): string; //soyut classta ki soyut metodları miras alırsak.. bu metodları kullanmka zorundayız aksi halde olumcul hata alırız
}
