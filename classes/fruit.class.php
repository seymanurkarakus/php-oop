<?php
class fruit
{
    private $name = "cezmi"; //özellik private olursa sadece class in içinden erişilebilir.
    protected $nameTwo="ece "; //protected olursa sadece kendi clasında ve miras alınan class larda kullanılabilir
    public $ad;
    public $renk;
    public static $warning="static ozgur vurgun";
    function veriGir($name)
    {
        $this->ad = $name; //class içinden degiskene boyle ulasılır
    }
    function fruit_print()
    {
        return $this->ad;
    }
}
