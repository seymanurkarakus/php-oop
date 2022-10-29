<?php
class banana extends fruit
{  //miras alma bu şekilde olur
    public $ayse = "hebele";
    function info()
    {
        return $this->name . " adamın dibidir<br>";
    }
    function infoTwo()
    {
        return $this->nameTwo . " adamın dibidir<br>";
    }
    function infoThree()
    {
        return parent::fruit_print(); //miras aldığımız class in sabitlerine ve fonksiyonlarına ulaşmak için parent:: kullanılır
                                       //bu kullanımın önemi -> protected olan fonksiyon , değişken ve sabitlere ulaşabilmemizi sağlar. metodlar için  $this de kullanılablir
                                       //miras alınan class tan sabit almak için parent:: zorunludur.
    }
}
