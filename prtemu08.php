<?php

//Soal 1: 
// Seorang siswa memiliki nilai 70, yang mana dibutuhkan nilai minimal sebesar 75 untuk dinyatakan lulus. 
// Buatlah sebuah program IF menggunakan php, yang mana program tersebut, berfungsi untuk mengecek apakah siswa tersebut lulus.

echo "Soal 1";
echo "<br>";
$Siswa1 = 70;
if ($Siswa1 < 75)
    echo "Dengan Nilai ". $Siswa1 . " Siswa Tidak Lulus";
echo "<br>";
echo "<br>";

// Soal 2:
// Seorang siswa yang lainnya memiliki nilai 80, yang mana uang jajannya akan dipotong 
// oleh orang tuanya jika nilai yang didapatnya dibawah nilai minimal lulus (75). 
// Buatlah program if else untuk mengecek apakah uang jajan si siswa tersebut akan dipotong atau tidak dipotong.

echo "Soal 2";
echo "<br>";
$Siswa2 = 80;
if ($Siswa2 < 75) {
    echo "Dengan Nilai ". $Siswa2 . " Uang jajan akan di potong";
} else {
    echo "Dengan Nilai ". $Siswa2 . " Uang jajan tidak akan di potong";
}
echo "<br>";
echo "<br>";

// Soal 3:
// Seorang siswa yang lain lagi memiliki nilai sebesar 75. 
// Wali kelasnya ingin menuliskan predikat nilai raport murid-murid kedalam bentuk kalimat: 
// Sangat Baik (dengan nilai 90-100), 
// Baik (dengan nilai 80-89), 
// Cukup (dengan nilai 70-79), 
// Kurang (dengan nilai 50-69), 
// dan Sangat Kurang (dengan nilai <49).
// Buatlah program if elseif else yang mana menuliskan predikat nilai tersebut.

echo "Soal 3";
echo "<br>";
$Siswa3 = 80;
if ($Siswa3 > 90) {
    echo "Dengan Nilai ". $Siswa3 . " Mendapat Predikat Sangat Baik";
} elseif ($Siswa3 > 80 and $Siswa3 < 90) {
    echo "Dengan Nilai ". $Siswa3 . " Mendapat Predikat Baik";
} elseif ($Siswa3 < 80 and $Siswa3 > 70) {
    echo "Dengan Nilai ". $Siswa3 . " Mendapat Predikat Cukup";
} elseif ($Siswa3 < 70 and $Siswa3 > 50) {
    echo "Dengan Nilai ". $Siswa3 . " Mendapat Predikat Kurang";
} else {
    echo "Dengan Nilai ". $Siswa3 . " Mendapat Predikat Sangat Kurang";
}
