<?php 
// assignment
$a = 10;
$b = 5;
// sama kayak $a = $a + $b;
$a *= $b;
echo $a;
echo "<br>";

// increment
$i = 10;
// panggil dulu baru tambah satu
echo $i++;
echo "<br>";
echo $i;
echo "<br>";
// tambah satu dulu baru panggil
echo ++$i;
echo "<br>";

// decrement
// panggil dulu baru kurang 1
echo $i--;
echo "<br>";
echo $i;
echo "<br>";
// kurang 1 dulu baru panggil
echo --$i;
echo "<br>";

// logika percabangan if
// statement boolean biasa: akan true jika nilainya true
$x = true;
if($x){
    echo "nilai X benar";
}
echo "<br>";

// statement NOT: akan true jika nilainya false
$y = false;
if(!$y){
    echo "nilai Y benar";
}
echo "<br>";

// bansos akan diterima jika si penerima itu tidak kaya
// penerima miskin
$penerima = false;

// kaya(true), miskin(false)
// jika si penerima tidak kaya (jika nilai false, maka if menilai bahwa kondisi tersebut true)
if(!$penerima){
    echo "bansos diterima";
}
echo "<br>";

// perbandingan
$nilai1 = 10;
$nilai2 = 20;
$nilai3 = 10;

// (>) bernilai benar jika nilai lebih besar dari nilai selainnya
if($nilai1 > $nilai2){
    echo "bernilai benar 1";
}
echo "<br>";

// (<) bernilai benar jika nilai lebih kecil dari nilai selainnya
if($nilai1 < $nilai2){
    echo "bernilai benar 2";
}
echo "<br>";

// (>=) bernilai benar jika nilai lebih besar atau sama dengan nilai selainnya
if($nilai1 >= $nilai3){
    echo "bernilai benar 3";
}
echo "<br>";

// (<=) bernilai benar jika nilai lebih kecil atau sama dengan nilai selainnya
if($nilai1 <= $nilai2){
    echo "bernilai benar 4";
}
echo "<br>";

// (==) bernilai benar jika kedua nilai sama
if($nilai1 == $nilai3){
    echo "bernilai benar 5";
}
echo "<br>";
// TUGAS: cari perbedaan antara perbandingan equel (==) dengan identik (===)

?>