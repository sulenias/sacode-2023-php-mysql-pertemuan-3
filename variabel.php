<?php

// string
$string = " Tipe Data String digunakan untuk menampilkan Karakter ";

$namaDepan = "Sulenias ";
$namaBelakang = "Asso";
$alamat = "Padang Bulan";

// Integer/int
$integer = 'Tipe data integer digunakan untuk menyimpan data bilangan bulat';
$x = 7;
$y = 9;

$tambah = $x + $y;
$kurang = $y - $x;
$kali = $x * $y;
$bagi = $x / $y;

// float
$float = 'Tipe data float digunakan untuk menyimpan bilangan picahan';

$pecahan = 10.4;
$pecahan_dua = 22.7;

// bolean
$bolean = 'Tipe data bolean hanya berisi dua nilai yaitu True dan False';
$satu = true;
$nol = false;

// and = x
$and = $satu && $nol;

// OR = +
$or = $satu || $nol;

// NULL
$null = 'Tipe data null biasa digunakan untuk menggantikan variabel yang kosong';

$r = ' ';
$r = null;

// ARRAY
$array = 'Array digunakan untuk menyimpan banyak data dalam satu variabel';
$nama = array('Samuel', 'Billy', 'Acho', 'Calvin', 'Agus');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Menampilkan variabel string -->
    <p> <?= $string ?> </p>
    <p> Nama Saya, <?= $namaDepan . $namaBelakang ?><br>
        Saya tinggal di, <?= $alamat ?></p>

    <br><br>

    <!-- TIPE DATA INTEGER -->
    <p> <?= $integer ?> </p>
    <p> <?= $x ?> + <?= $y ?> = <?= $tambah ?> </p>
    <p> <?= $y ?> - <?= $x ?> = <?= $kurang ?> </p>
    <p> <?= $x ?> * <?= $y ?> = <?= $kali ?> </p>
    <p> <?= $x ?> / <?= $y ?> = <?= $bagi ?> </p>

    <br><br>

    <!-- TIPE DATA FLOAT-->
    <p> <?= $float ?> </p>
    <p> <?= $pecahan ?> </p>
    <p> <?= $pecahan_dua ?> </p>

    <br><br>

    <!-- TIPE DATA BOLEAN -->
    <p> <?= $bolean ?> </p>
    <p> <?= var_dump($and) ?> </p>
    <p> <?= var_dump($or) ?> </p>

    <br><br>

    <!-- TIPE DATA NULL -->
    <p> <?= $null ?> </p>
    <p> <?= var_dump($r) ?> </p>

    <br><br>

    <!-- TIPE DATA ARRAY -->
    <p> <?= $array ?> </p>
    <?php foreach ($nama as $n) : ?>
        <p> <?= $n ?> </p>
    <?php endforeach; ?>


</body>

</html>