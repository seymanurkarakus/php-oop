<?php
spl_autoload_register(function ($class) {
    $path = __DIR__ . "/" . $class . ".class.php"; //proje buyudugunde sürekli require include dememek için,class lara erişmek için  bu yapıyı kullanırız. 
    if (file_exists($path)) {            //path değişkeninde class larımızın oldugu dosya yolunu alıyoruz daha sonra sistem for donugusundeymıs gibi tek tek classlara erişmeye calışıyor
        require_once $path;   //$class içine class adı uyazılıyor o yuzden dosya adında class isminin geçmesi gerek , ki o class ın bulunduug dosyaya erişebilelim
    }
});
