<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>

<body>
    <?php

    echo "<h4>Tırnak İşaretleri Arasındaki Farklar</h4>";

    $uni = "Adnan Menderes Üniversitesi";
    echo "Değişken İçeriği: $uni";
    echo "<br>";
    /* Değişkenin ismini yazdırır. */
    echo "1-Kazandığınız Üniversite: " . '$uni';
    echo "<br>";
    /* Değişkenin içeriğini yazdırır. */
    echo "2-Kazandığınız Üniversite: " . "$uni";
    echo "<br>";
    /* Değişkenin içeriğini yazdırır. */
    echo "3-Kazandığınız Üniversite: " . $uni;
    echo "<br>";
    /* Değişkenin içeriğini yazdırır. */
    echo "4-Kazandığınız Üniversite: $uni";

    echo "<hr><h4>Temel Matematiksel İşlemler</h4>";
    
    echo "<h5>Toplama İşlemi</h5>";

    $sayi1 = 10;
    $sayi2 = 20;
    echo '$sayi1 + $sayi2 = ' . ($sayi1 + $sayi2);
    echo "<br>";
    echo "$sayi1 + $sayi2 = " .  ($sayi1 + $sayi2);
    echo "<br>";
    $sonuc = $sayi1 + $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";

    echo "<h5>Çıkarma İşlemi</h5>";
    $sayi1=10;
    $sayi2=20;
    echo '$sayi1 - $sayi2=' . ($sayi1 - $sayi2);
    echo "<br>";
    echo "$sayi1 - $sayi2=" . ($sayi1 - $sayi2);
    echo "<br>";
    $sonuc = $sayi1 - $sayi2;
    echo "$sayi1 + $sayi2 = $sonuc";

    echo "<h5>Çarpma İşlemi</h5>";
    $sayi1=10;
    $sayi2=20;
    echo '$sayi1 * $sayi2=' . ($sayi1 * $sayi2);
    echo "<br>";
    echo "$sayi1 * $sayi2=" . ($sayi1 * $sayi2);
    echo "<br>";
    $sonuc = $sayi1 * $sayi2;
    echo "$sayi1 * $sayi2 = $sonuc";

    echo "<h5>Bölme İşlemi</h5>";
    $sayi1=10;
    $sayi2=20;
    echo '$sayi1 / $sayi2=' . ($sayi1 / $sayi2);
    echo "<br>";
    echo "$sayi1 / $sayi2=" . ($sayi1 / $sayi2);
    echo "<br>";
    $sonuc = $sayi1 / $sayi2;
    echo "$sayi1 / $sayi2 = $sonuc";

    echo "<h5>Üst Alma İşlemi (pow)</h5>";
    $x=3;
    $y=2;
    echo "$x<sup>$y</sup>=" . (pow($x,$y));
    echo "<br> Değişken Tipi:" . gettype($x);

    echo "<h5>Karekök Alma İşlemi (sqrt)</h5>";
    $x=25;
    $karekok=sqrt($x);
    echo "$x'in karekökü $karekok'tir.";

    echo "<h5>Mutlak Değer İşlemi (abs)</h5>";
    $x=(-4);
    $mutlak=abs($x);
    echo "|$x|'in mutlak değeri $mutlak'tür.";

    echo "<h5>Taban Değişim İşlemi(base_convert(x,taban1,taban2))</h5>";
    echo "27 sayısının 2'lik tabandaki karşılığı:" . base_convert(27,10,2);
    $sayi=30;
    $taban=10;
    $yenitaban=2;
    $sonuc=base_convert($sayi,$taban,$yenitaban);
    echo "($sayi)<sub>($taban)</sub>: ($sonuc)<sub>$yenitaban</sub>";



    echo "<h5>Mod İşlemi (fmod(x,y))</h5>";
    $x=20;
    $y=4;
    $mod=fmod($x,$y);
    echo "$x mod $y = $mod";
    echo "$x sayısı: " . (fmod($x,2) == 0) ? "Çifttir." : "Tektir.";

    echo "<h5>Yuvarlama İşlemi (round(x,y))</h5>";
    $x=15.315;
    $y=15.385;
    echo "$x'in bir ondalık basamak yuvarlaması:" . round($x,1); 
    echo "$y'in bir ondalık basamak yuvarlaması:" . round($y,1);
    echo "$x'in iki ondalık basamak yuvarlaması:" . round($x,2);
    echo "$y'in iki ondalık basamak yuvarlaması:" . round($y,2);


    echo "<h5>Yuvarlama İşlemi(floor(x))</h5>";
    /* Her zaman en yakın aşağı tam sayı değerine yuvarlama işlemi yapar.*/
    $x = 15.315;
    echo "$x : " .floor($x);

    echo "<h5>Yuvarlama İşlemi(ceil)(x)</h5>";
    /* Her zaman en yakın yukarı tam sayı değerine yuvarlama işlemi yapar.*/
    $x = 15.315;
    echo "$x" . ceil($x);

    echo "<h5>Rastgele Sayı Üretme(rand)()</h5>";
    echo rand(10,100);

    



    ?>



<br><br><br><br><br><br><br><br><br><br><br><br>


</body>

</html>