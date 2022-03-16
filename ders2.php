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
    
    echo "Tırnak İşaretleri Arasındaki Farklar</h4>";
    echo "<br>";
    echo "Adnan Menderes Üniversitesi";
    echo "<br>";
    $uni="Adnan Menderes Üniversitesi";
    echo "<br>";

    echo "1-Kazandığınız Üniversite:" . '$uni';/* Değişkenin ismini yazdırır.*/
    echo "<br>";
    echo "2-Kazandığınız Üniversite:" . "$uni";/* Değişkenin içeriğini yazdırır.*/
    echo "<br>";
    echo "3-Kazandığınız Üniversite:" . $uni;/* Değişkenin içeriğini yazdırır.*/
    echo "<br>";
    echo "4-Kazandığınız Üniversite: $uni";/* Değişkenin içeriğini yazdırır.*/
    
    ?>

</body>
</html>