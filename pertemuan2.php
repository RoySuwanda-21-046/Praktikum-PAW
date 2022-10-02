<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> pertemuan 2</title>
</head>
<body>
    <?//="hello wolrd"?><br>
    <?php //echo "hello world"
    function test(){
        $x = 5;
        echo "variabel x inside function is :$x";
    }
    test();
    echo "variabel x outside function is :$x"; //local variabel adalah variabel yg hanya bisa diakses didalam function tersebut

    ?> <br>
    <?php
    $x = 5;
    $y = 10;
    function test1(){
        global $x,$y;                           //global variabel adalah variabel yng bisa dipanggil diluar function tersebut
        $y=$x+$y;
    }
    test1();
    echo $y;
    ?> <br>
    <?php
    $s="4";
    $d="5";

    function test2(){  
        global $s,$d;
        echo $s;
        echo $d;
    } test2(); 
     ?> <br>


    <?php
    // perbedaan penggunaan perulangan do-while dengan foreach
    //do-while
    $x=1;
    do{
        echo "hfvhdvhdvhv: $x <br>";
        $x++;                           //looping akan berjalan sebanyak kondisi yang ada didalam while, misal contoh disamping
    }while ($x <=3);                    //misal contoh disamping perulangan terjadi sebanyak 3 kali


    ?>
    <?php
    //foreach
    $color = array ("red","yellow","white","blue");
    foreach ($color as $value){
        echo "$value <br>";
    }
    ?>
    
</body>
</html>
