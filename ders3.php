<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-3</title>
</head>
<body>
    <?php    

        /* Uygulama Ödevi
        Kuyruk ve yığın veri yapılarının php üzerinde dizileri kullanılarak örneklendiriniz.*/

        /* Kuyruk(Queue) Yapısı 
        $arabalar = array("Audi","Volkswagen","BMW","Mercedes-Benz");
        array_push($arabalar,"Porsche","Opel");
        echo $arabalar;*/

        /* Yığın(Stack) Yapısı 
        $rastgele = rand(10,100);
        echo $rastgele;
        */

    

        /* Rastgele üretilen sayı 
        50'den büyükse 
        Geçtiniz,Notunuz:XX
        50'den küçükse
        kaldınız,notunuz:XX
        uygulamasını gerçekleştiriniz.*/
        
         $rastgele_sayi = rand(10,100);
        if($rastgele_sayi >= 50) {
            echo "Geçtiniz - Notunuz:$rastgele_sayi";
        }
        else {
            echo "Kaldınız - Notunuz:$rastgele_sayi"; 
        }
        

        echo "<h3>Sık Kullanılan String Fonksiyonlar</h3>";

        $yazi="Aydın Adnan Menderes Üniversitesi";
        echo gettype($yazi);
        echo "<br> Değişken İçeriği: $yazi (" . gettype($yazi) . ")";


        //İçeriğin Büyük Harfe Dönüştürülmesi

        echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması" . $buyuk_yazi= strtoupper($yazi);
        echo "<br> \$yazi İçeriğinin Büyük Harfle Yazılması" . $buyuk_yazi= mb_strtoupper($yazi);

        //İçeriğin küçük harfle yazılması

        echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması" . $kucuk_yazi= strtolower($buyuk_yazi);
        echo "<br> \$yazi İçeriğinin Küçük Harfle Yazılması" . $kucuk_yazi= mb_strtolower($buyuk_yazi);

        // İçeriğin İlk Harfinin Büyük Harfe Dönüştürülmesi

        echo "<br> \$yazi İçeriğin İlk Harfinin Büyük Harfle Yazılması" . $ilk_yazi = ucfirst($kucuk_yazi);

        // İçeriğin Tüm Kelimelerin İlk Harfinin Büyük Harfe Dönüştürülmesi

        echo "<br> \$yazi Tüm Kelimelerin İlk Harfinin Büyük Harfle Yazılması" . $kelime = ucwords($ilk_yazi);
    
        // İçeriğin Harf Sayısı:

        echo "<br> \$yazi İçerisindeki Harf Sayısı: " . strlen($yazi);

        // ASCII Char Karşılığı:

        echo "<br> Karakter Karşılığı: " . chr(109);
        echo "<br> Karakter Karşılığı: " . chr(19);

        // Uygulama 1-255 Char Karşılıkları:
        echo "<br> ASCII Karakterleri: ";
        for ($i=32; $i <= 127; $i++) {
            echo chr($i) . "-";
        }

        //Metnin parçalanarak diziye dönüştürülmesi
        $diz=explode(" ",$yazi);
        echo "<br>";
        print_r($diz);
        
        //Uygulama Paragraftaki Kelime ve Cümle Sayılarını Alt alta yazdırınız.
        
        $metin="Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda nobis sed eveniet deserunt at dicta optio, expedita, minima ut autem ipsum ratione laudantium porro nisi impedit. Alias odit quaerat iste!";
        
        $kelimelerDizisi=explode(" ", $metin);
        $cumlelerDizisi=explode(" ",$metin);

        echo "<br>Kelime Sayısı: " . count($kelimelerDizisi); 
        echo "<br>Cümle Sayısı: " . count($cumlelerDizisi);

        /* Uygulama
            Veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız.
        */
        echo "<br>";
        $tarih="2021-12-25";
        $yenitarih=explode("-", $tarih);
        echo "$yenitarih[2]- $yenitarih[1] - $yenitarih[0]";

        //Dizinin metne dönüştürülmesi (implode)
        echo "<br>";
        $aylar=["Ocak","Şubat","Mart","Nisan","Mayıs"];
        print_r($aylar);
        $aylarString= implode(" ", $aylar);
        echo "<br>String: $aylarString";

        /*  
    Verilen Bir Metnin belirtilen sayı kadar ayrılarak bir dizi içeriğine aktarılması.Eğer sayı belirtilmezse metni harf harf böler. 
     str_split()
        */
     echo "<br>";
     $iban="TR0010002000300040005000";

     $ibanyeni=str_split($iban,4);
     print_r($ibanyeni);
        echo "<br>";
        foreach($ibanyeni as $parca){
            echo "$parca ";
        }

        /* Trim - Substr - str_replace - md5 - sha1 */

    ?>


   

</body>
</html>