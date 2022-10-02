<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 1 PAW </title>
</head>
<body>
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


<?php
echo "------------------------ <br>";
//soal no 3
$va2 = 'biru'; //variabel global
function soal3(){
    $va1 = 'merah'; //variabel lokal
    global $va2;
    echo "warna yang pertama : $va1 <br>";
}soal3();

echo "warna yang kedua : $va2 <br>";

?>


<?php
echo "------------------------ <br>";
//soal no 4
$x=1;
$a=1;
do{
    echo "data ke: $x = $a <br>";
    $x++.$a++;                          
}while ($x <=5);
?>
</body>
</html> 