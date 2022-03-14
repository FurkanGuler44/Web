<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furkan</title>
</head>

<body>
    <!-- Açıklama Satırı -->
    <?php
    // Açıklama Satırı//
    /* Açıklama Satırı Bloğu
        Shift+Alt+A 

       Kullanılan Komutlar
        echo: Ekrana yazdırma işlemi yapar.
        İçerisinde HTML etiketleri kullanılabilir.
        Çift veya tek tırnak ile kullanılabilir.
        Çift tırnak içerisinde değişken içerikleri gösterilir.
        Nokta işareti ile birleştirme yapılabilir.
        \ Kaçış karakteridir.Özel ifadelerden önce kullanılır.
    */


    echo "<h3>Aydın Adnan Menderes Üniversitesi</h3>";
    echo "<hr> <h4>Aydın Meslek Yüksekokulu</h4>";
    echo "Bilgisayar Programcılığı  " . "  Web Teknolojileri" . "<br>";
    echo "Bilgisayar Programcılığı" . "<br>" . "Web Teknolojileri";

    echo "<hr> <h4> Değişken Tanımlama Kuralları</h4>";
    echo "<ol>
            <li>Değişken isimleri $ ile başlar. </li>
            <li>Değişken isimleri sayısal bir ifadeyle başlayamaz. </li>
            <li>Değişken isimlerinde boşluk bırakılmaz.İki kelime varsa örn:BirinciSinif,birinci_sinif,birinciSinif şeklinde yazılır. </li>
            <li>Değişken ve dosya isimlerinde Türkçe karakter kullanılmamalıdır. </li>
            <li>Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır.
             \$sayi != \$Sayi </li>
            <li>Değişken ifadelerinde metinsel bir ifade varsa çift tırnak (\") veya tek tırnak (') kullanılır. </li>
            <li>Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır. </li>                    
            <li>Değişken ismi değişkenin içeriğini ifade eder.</li>
            <li>Değişkenler ekrana echo ile yazdırılır.</li>
                       
          </ol>";

    echo "<hr> <h4> Değişken Tanımlama Örnekleri</h4>";

    $isim = "Furkan";
    $soyisim = "Güler";
    $yas = 19;

    echo $isim . " " . $soyisim;
    echo "<br>";
    echo "$isim $soyisim";


    /* Uygulama: 
        Üniversite-MYO-Ad-Soyad-Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
        Girilen bu değişkenlerin değerlerini bir html tablo içerisinde gösteriniz.
    */

    $ad = "Furkan";
    $soyad = "Güler";
    $uni = "Aydın Adnan Menderes Üniversitesi";
    $MYO = "Aydın Adnan Menderes Üniversitesi Meslek Yüksekokulu";
    $Numara = 216001017;

    ?>
    <form action="">
        <label for="ad">Ad</label>
        <input type="text" name="" value="<?php echo $ad; ?>" id="ad"><br>

        <label for="uni">Soyad</label>
        <input type="text" name="" value="<?php echo $soyad; ?>" id="soyad"><br>

        <label for="uni">Üniversite</label>
        <input type="text" name="" value="<?php echo $uni; ?>" id="uni"><br>

        <label for="uni">MYO</label>
        <input type="text" name="" value="<?php echo $MYO; ?>" id="MYO"><br>

        <label for="uni">Numara</label>
        <input type="text" name="" value="<?php echo $Numara; ?>" id="Numara"><br>
    </form>

</body>

</html>