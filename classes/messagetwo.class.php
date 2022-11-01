<?php
trait EceMesaj{
    public $eceName="ece sensoz ile tarit içine trait miras";
 }
trait messagetwo
{
    use EceMesaj;
    //trait için de class tan farklı olarak sabit oluşturamazsın
    private $info = "nesne yönelimli programlama";
     function PrintMe2(){
        return"<h3>". $this->info . " ile çoklu kalıtım böyle yapılır.</h3>";
    }
    private function BlaBla(){
        echo "<h2>bla bla metodu çalışıyor </h2>";
    }
}


