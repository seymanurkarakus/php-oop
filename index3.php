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

$banana = new banana; //fruit nesnesinden miras aldığımız metod
$banana->veriGir("hayriye<br>");
echo $banana->fruit_print();
echo $banana->info();
echo $banana->infoTwo();
echo "<h1>$banana->ayse</h1>";




echo "<h2>" . fruit::$warning . "</h2>"; //static nitelikte ti özelliği nesne oluşturmadan çektik.
echo "<h2>" . pi::$number . "</h2>";

$PI = new pi;
echo $PI->staticValue();

echo "<h2> math.class.php de ki math class inin pi class indan miras aldığı static değeri bastık: " . math::$number . "</h2>";
//STATIC ile birlikte sadece public kullanılabilir


$math = new math();
echo $math->mathStatic();



echo "<h2>" . greet::welcome() . "</h2>"; //static functionlar nesne oluşturmadan çağrılabilir

new greet(); //bir atama yapmazsak dahi __contruct çalışır.




final class ece   //final ön eki getirilen class lar miras alınamaz
{                  //final ön eki fonksiyon başınada yazılır. class taki gibi miras alınmaı engellenir
    function __construct()
    {
        echo "ece";
        //final ön eki getirilen class lar miras alınamaz
    }
}
// class deneme extends ece{

// }                           yani bu şekilde kullanım olumcul hata patlatır
// $ece = new deneme;




//soyut sınııflar
$cars = new nissan("Nissan");
echo $cars->info();


//interface


interface Animals
{
    // public $name="ece";  interface de property kullanamazsın
     const OZGUR = "ozgur"; //interface de sabit tanımlanabilir
    //const sadece public olarak kullanılabilir, bu fonksiyonlar içinde geçerlidir
    public function Sound(); //abstract gibi interface dde tanımlanan fonksiyonların miras alınan sınıfta kullanımı zorunludur.
    //arayüzler de static metod kullanılabilir
}
interface miras extends Animals{ //bir interface başka bir interface i miras alıyor
  
}
class Cat implements miras // interface bu şekilde miras alınır. Animals yanına "," bırakıp başka interface lerde ekleyebiliriz
{
    public function Sound()
    {
        return "<br><br><h3>miyav</h3>";
    }
    public function Info()
    {
        return "<h3>ozgur-ece</h3>";
    }
}


$cat = new Cat;
echo $cat->Sound();
echo $cat->Info();



//trait kullanımı

$welcome =new welcome;
echo $welcome->PrintMe();
echo $welcome->PrintMe2();
echo $welcome->ekranaBas();
echo $welcome->PrintMe2();
echo $welcome->eceName;
echo $welcome->BlaBla();


//zincirleme metod kullanımı
$calculate= new calculate(5);
echo $calculate->sum(95)->sub(40)->div(2)->mul(4)->print();

//namespace
//namespace aynı isimli class lar oluşturup bu class ları dizin mantığıyla kullanmamızı sağlar
//namespace ile aynı işi yapan class ları gruplarız
require_once "classes/test.php";
require_once "classes/test2.php";
$test=new \members\you\test; 
$test->message();

use \members\me\test; // bu şekilde use ile namespace belirtilirse sonra ki kodlar da uzun uzun yazmak zorunda kalmayız
$test=new test;
$test->message();


use \members\me\test as testing; //bu şekilde namespace e takma isim verdik
$testing= new testing;
$testing->message();



//nesne kopyalama
//clone ile kopyalarsan ikisi ayrı ayrı nesneler olur.


//magic metods

//__construct nesne belleğe yüklenirken çalışır

//__destruct nesne bellekten silinirken çalışır

//__call çağırılan metod mevcut değil ise fatal error dönmesi yerine __call metodu çalışır

//__callStatic class ta bulunmayan bir static metod çağırıldığında çalışır. __callStatic metodu static olarak oluşturulmalıdır.

//__get  nesne içinde olmayan veya erişim izni olmayan bir özelliğe(property) erişilmeye çalışıldığında çalışır.

//__set nesne içinde olmayan veya erişim izni olmayan bir özelliğe(property) değer atanmaya çalışıldığında çalışır.

//__isset nesne içinde olmayan veya erişim izni olmayan bir özelliğe isset veya empty fonksiyonları ile sınandığın da çalışır.

//__unset nesne içinde olmayan veya erişim izni olmayan bir özelliğe unset fonksiyonu ile yok edilmeye çalışıldığın da çalışır.

//__sleep nesneye serialize fonksiyonu uygulandığında çalışır

//__wakeup nesneye unserialize fonksiyonu uygulandığında çalışır

//__toString nesne yazdırıldığın da çalışır

//__invoke nesne fonksiyon gibi çalıştırıldığın da çalışır

//__clone clone ile nesne kopyalandığın da çalışır

//__debugInfo nesneye var_dump fonksiyonu uyguandığın da çalışır

//__set_state nesneye var_export fonksiyonu uygulandığında çalışır


//BU MAGİC METODLAR İKİ PARAMETRE ALIR. İLK PARAMETRE METOD,ÖZELLİK İSMİNİ VERİR. İKİNCİ PARAMETRE GONDERİLMEYE ÇALIŞILAN DEĞERİ VERİR



//YARARLI KOMUTLAR 

defined("NUMBER"); // böyle bir sabit var mı diye bakar varsa true yoksa false doner


//önbelleğe alınmayı engelleme
header("Content-Control:no-cache, no-store, must-revalidate");
header("Expires:Sun, 01 Jan 1981 01:00:00GMT");
header("Pragma:no-cache");

//header ile türkçe karakter sorunu çözme
header("Content-Type:text/html; charset=utf-8");

//url in başlık bilgilerini getirir
$address="https://www.ozgurvrgn.xyz";
$result=get_headers($address);
echo"<pre>";   
print_r($result);
echo"</pre>";

//name niteliği olan meta taglari çeker
$result=get_meta_tags($address);
echo"<pre>";   
print_r($result);
echo"</pre>";