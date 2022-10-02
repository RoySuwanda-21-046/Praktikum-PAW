<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 1 Soal No 2</title>
</head>
<body>
    <h3> Nama/NIM : Roy Suwanda/210411100046 </h3>
<?php
    //soal no 2
    
    $x = 7;
    $y = 5;
    echo "Nilai X = $x <br>";
    echo "Nilai Y = $y <br>";

    function soal2(){
        global $x,$y,$jumlah,$kali,$bagi,$kurang;
        $jumlah= $x+$y;
        $kali =$x*$y;
        $bagi = $x/$y;
        $kurang =$x-$y;
    }soal2();
    echo "Hasil X + Y : $jumlah <br>";
    echo "Hasil X * Y : $kali <br>";
    echo "Hasil X - Y : $kurang <br>";
    echo "Hasil X / Y : $bagi <br>";
?>
</body>
</html>