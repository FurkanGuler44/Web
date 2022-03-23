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
        

    ?>

</body>
</html>