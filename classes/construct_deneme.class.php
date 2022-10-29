<?php

class construct_deneme
{
    public $name;
    function __construct($par) //construct parametre alabilir
    {
        $this->name = $par;
      //  echo "construct metodu çalıştı - $par<br>";  // __construct çağırılmasa bile otomatik çalışır
    }
    function __destruct()
    {
        return "destruct metodu çalıştı<br>"; //constract gibidir. tek farkı construct un tersine class türütüldükten sonra en son otomatik çalışır
    }
}
?>