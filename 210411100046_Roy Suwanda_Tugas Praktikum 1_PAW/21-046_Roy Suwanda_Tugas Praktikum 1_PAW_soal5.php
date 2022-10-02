<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 1 Soal No 5</title>
</head>
<body>
<h3> Nama/NIM : Roy Suwanda/210411100046 </h3>
    <?php
    $hari=date('l');
    $tanggal=date('d');
    $bulan=date('m');
    $tahun=date('Y');
        switch($hari){
            case 'Sunday':$hari="Minggu";
            break;
            case 'Monday':$hari="Senin";
            break;
            case 'Tuesday':$hari="Selasa";
            break;
            case 'Wednesday':$hari="Rabu";
            break;
            case 'Thursday':$hari="Kamis";
            break;
            case 'Friday':$hari="Jum'at";
            break;
            case 'Saturday':$hari="Sabtu";
            break;
        }
        switch($bulan){
            case '01':$bulan="Januari";break;
            case '02':$bulan="Februari";break;
            case '03':$bulan="Maret";break;
            case '04':$bulan="April";break;
            case '05':$bulan="Mei";break;
            case '06':$bulan="Juni";break;
            case '07':$bulan="Juli";break;
            case '08':$bulan="Agustus";break;
            case '09':$bulan="September";break;
            case '10':$bulan="Oktober";break;
            case '11':$bulan="November";break;
            case '12':$bulan="Desember";break;
        }
        echo "<h2><b>Sekarang Hari $hari : Tanggal $tanggal $bulan $tahun";       
    ?>  
</body>
</html>