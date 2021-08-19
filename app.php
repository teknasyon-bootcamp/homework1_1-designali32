<?php

$age = 25;
$age=(int) $age;
//age değişkeni int gelmeme ihtimaline karşı temizlendi.
//yaş aralıklarına uygun şekilde ekrana veri basılıyor
if($age>=0 and $age<=14){
    echo 'Çocuk';
}
else if($age>=15 and $age<=24){
    echo 'Genç';
}
else if($age>=25 and $age<=64){
    echo "Yetişkin";
}
else if($age>=65){
    echo "Yaşlı";
}
else{
    echo "\$age değişkenine girilen veri yaş sınırlarına uygun değildir.";
}
/**
 * Bu ödevde age değişkeni içerisinde yer alan yaş değerinin bulunduğu
 * yaş grubu tespit edilip ekrana bu yaş grubunun ismi yazılmalıdır. 
 * 
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * Ekran çıktısı için `echo` yada `print` kullanabilirsiniz.
 * 
 * > **Not**: Çıktıda sadece `Çocuk`, `Genç`, `Yetişkin` veya `Yaşlı`
 * yer almalıdır.
 * 
 * İyi çalışmalar.
 */