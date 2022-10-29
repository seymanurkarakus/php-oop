<?php
//cookie oluşturma
//ilk parametre cookie adı ikinci parametre değer. son kullanma tarihi verilmezse tarayıcı kapanınca cookie silinir.
setcookie("cookie_name", "cookie value");
setcookie("user-name", "ece");
setcookie("password", 123456);
echo "<h3>" . $_COOKIE["cookie_name"] . "</h3>";
echo "<h3>" . $_COOKIE["user-name"] . "</h3>";
echo "<h3>" . $_COOKIE["password"] . "</h3>";

//foreach ile tüm cookileri çekme
foreach ($_COOKIE as $key => $value) {
    echo "<h4>$key = $value</h4>";
}

//dosya , indirme , mod, izinler gibi konuları atladım



/////object orianted start

require_once "classes/all-class.php";


$diller = new languages();
echo "yazılım dili" . $diller->name . "<br>";
echo "yazılım özelliği" . $diller->property . "<br>"; //class degiskenleri(özellikler) boyle cagırlır
echo $diller->myMethod() . "<br>"; //class fonksiyonları(method) boyle cagırlır
echo languages::message; //class sabitleri bu şekilde çağırılır


$muz = new fruit();
$elma = new fruit();
echo $muz->veriGir("MUZ") . "<br>";
echo $muz->fruit_print() . "<br>";
echo $elma->veriGir("ELMA");
echo $elma->fruit_print() . "<br>";

//bu şekilde direkt classa parametre verirsek bunu construct yakalar
$const = new construct_deneme("ozgur"); //goruldugu gibi sadece nesne olusturuldu fonksiyon cagırılması ama contruct otomatik çalıştı

$lang = new languages;
echo  $lang->name;

$banana =new banana; //fruit nesnesinden miras aldığımız metod
$banana->veriGir("hayriye<br>");
echo $banana->fruit_print();
echo $banana->info();
echo $banana->infoTwo();
echo "<h1>$banana->ayse</h1>";