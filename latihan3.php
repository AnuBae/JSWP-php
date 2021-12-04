<?php

$x = 16;
$y = 16;
//If..else
if ($x == $y) {
    echo "x sama dengan y";
} else {
    echo "x tidak sama dengan y";
}
echo "<br>";

// ternary: if else dengan bentuk yg berbeda
$sama = ($x == $y) ? "x sama dengan y" : "x tidak sama dengan y";
echo $sama;
echo "<br>";


//Program mencari tahu ganjil genap 
$input = 136;
if ($input % 2 == 1) {
    echo $input . " adalah bilangan ganjil";
} else {
    echo $input . " adalah bilangan genap";
}
echo "<br>";
//logical operator
//And membandingkan 2 boolean yang mana kedua bolean harus bernilai true agar if terpenuhi
if (true and false) {
    echo "Kondisi And terpenuhi";
}
$and = (false and false and true);
var_dump($and);

//OR akan terpenuhi jika salah satu atau kedua boolean yang dibandingkan bernilai true
$or = (false or false);
var_dump($or);

$xor = (true xor false);
var_dump($xor);

//if.. else if.. else

echo "<br>";
$nilai = 100;

if ($nilai > 85) {
    echo "Nilai A";
} elseif ($nilai <= 85 and $nilai > 70) {
    echo "Nilai B";
} elseif ($nilai <= 70 and $nilai > 50) {
    echo "Nilai C";
} else {
    echo "Nilai D";
}

echo "<br>";
// switch case
$warna = "biru";

switch ($warna) {
    case "biru":
        echo "warna anda biru1";
        break;
    case "hijau":
        echo "warna anda hijau";
        break;
    case "biru":
        echo "warna anda biru2";
        break;
    default:
        echo "warna anda bukan merah, hijau, atau biru";
}

$NilaiA = 79.99;
echo "Nilai Siswa A adalah ";

if ($NilaiA >= 90 and $NilaiA <= 100) {
    echo "Sangat baik";
} elseif ($NilaiA >= 80 and $NilaiA < 90) {
    echo "Baik";
} elseif ($NilaiA >= 70 and $NilaiA < 80) {
    echo "Cukup";
} elseif ($NilaiA >= 50 and $NilaiA < 70) {
    echo "Kurang";
} elseif ($NilaiA >= 0 and $NilaiA < 50) {
    echo "Sangat Kurang";
} else {
    echo "Input Nilai Salah";
}
