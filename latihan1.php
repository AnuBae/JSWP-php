<?php

// Ini comment 1 baris
#Ini juga comment 1 baris
/* ini comment
    ini juga comment
    asjasdadasd
*/

// Ini Baris untuk Print
echo "Hello world!<br>";
echo "bla<br>";

// HTML dalam php
echo "<h1 style='color:red;'>Ini HTML dalam php</h1>";

//Varibel dan Tipe Data
$nama = "Otto"; //Ini String
$umur = 12;     //Ini Int
$berat_badan = 50.4; //Ini Float
$statusPernikahan = false; //Ini Boolean

$daftar_siswa = ["Abdul", "Budi", "Cindy"]; //Ini array

echo $nama;
echo "<br>";
var_dump($nama);
echo "<br>";

echo $umur;
echo "<br>";
var_dump($umur);
echo "<br>";

echo $berat_badan . " kg";
echo "<br>";
var_dump($berat_badan);
echo "<br>";

var_dump($statusPernikahan);
echo "<br>";

echo $daftar_siswa[0];
echo "<br>";
echo $daftar_siswa[1];
echo "<br>";
var_dump($daftar_siswa);

echo "<br>";
$biodata = [$nama, $umur, $berat_badan, $daftar_siswa];
var_dump($biodata);
echo "<br>";
echo "<br>";


//Operator Aritmatika
$a = 5;
$b = 7;

//Perjumlahan
$c = $a + $b;
echo $c;
echo "<br>";
//Pengurangan
$d = $a - $b;
echo $d;
echo "<br>";
//Perkalian
$e = $a * $b;
echo $e;
echo "<br>";

//pembagian
$f = $a / $b;
echo $f;
echo "<br>";
var_dump($f);
echo "<br>";

//modulus
$x = 24;
$y = 5;
$z = $x % $y;
echo $z;
echo "<br>";

//ekponensial atau pangkat
$pangkat = 2 ** 3;
echo $pangkat;
echo "<br>";

//akar
$nilai = 26;
$akar = sqrt($nilai);
echo $akar;

$daftar_pegawai = [
    [
        "maman",
        15,
        65.4
    ],
    ["saya", 20, 70.6],
    ["saya", 20, 70.6]
];

var_dump($daftar_pegawai);
echo "<br>";
echo $daftar_pegawai[0][0];
echo " Umur = ";
echo $daftar_pegawai[0][1];
echo " ";
echo $daftar_pegawai[0][2];
echo "<br>";
echo $daftar_pegawai[1][0];
