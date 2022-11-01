<?php
trait messageone
{
    //trait için de class tan farklı olarak sabit oluşturamazsın
    private $name = "OOP";
    public function PrintMe()
    {
        return "<h3>" . $this->name . " yaklaşımla kod yazıyorum.</h3>";
    }
}
