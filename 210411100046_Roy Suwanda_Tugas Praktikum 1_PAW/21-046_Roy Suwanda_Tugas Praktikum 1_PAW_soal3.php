<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 1 Soal No 3</title>
</head>
<body>
<h3> Nama/NIM : Roy Suwanda/210411100046 </h3>
<?php
    //soal no 3
    $va2 = 'biru'; //variabel global
    function soal3(){
        $va1 = 'merah'; //variabel lokal
        global $va2;
        echo "warna yang pertama : $va1 <br>";
    }soal3();

    echo "warna yang kedua : $va2 <br>";
?>
</body>
</html>