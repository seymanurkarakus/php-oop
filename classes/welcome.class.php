<?php
class welcome
{
     use messageone, messagetwo {
         messageone::PrintMe insteadof messagetwo; // meali-> eğer iki trait ede printMe fonksiyon var ise, messageone daki printMe fonksiyonunu kullan // bu yapı kullanılmazsa ve birbirini miras alan traitlerde tekrar eden isimli metod varsa hata patlatır
         messagetwo::PrintMe2 as ekranaBas;
         // meali-> messagetwo traitinde ki FullName metodunun adını myMethod ile değiştirir. //fonksiyon her iki ismi ile de çağırılabilir
     } //trait ler use ön eki ile çağırılır. birden fazla trait çağırmak için ardı sıra "," yazıp trait leri çağırabilirsin


    use messageone, messagetwo {
        messagetwo::PrintMe2 as ekranaBas;
        // meali-> messagetwo traitinde ki FullName metodunun adını myMethod ile değiştirir. //fonksiyon her iki ismi ile de çağırılabilir
        messagetwo::BlaBla as public; //miras aldığımız private olan BlaBla metodunu public duruma getirdik
    }
}
