<?php

// for(variable awal (mulai); batas akhir (syarat); perubahan (increment decrement))
// akan menjalankan perintah perulangan selanjutnya jika semua kode yg berada dialamnya terpenuhi
for ($i = 10; $i >= 0; $i--) {
    echo $i . " ";
}
echo "<br>";
echo "-----------------------";
echo "<br>";

// loop for didalam loop for
for ($i = 0; $i < 10; $i++) {
    echo "perulangan i yang ke-" . $i;
    for ($j = 0; $j < 10; $j++) {
        echo "--perulangan j yang ke-" . $j . " ";
    }
    echo "<br>";
}
echo "<br>";
echo "-----------------------";
echo "<br>";

// loop for didalam loop for didalam loop for
for ($i = 0; $i < 5; $i++) {
    echo "perulangan i yang ke-" . $i;
    for ($j = 0; $j < 5; $j++) {
        echo "--perulangan j yang ke-" . $j . " ";
        for ($k = 0; $k < 5; $k++) {
            echo "##--perulangan k yang ke-" . $k . " ";
        }
        echo "<br>";
    }
    echo "<br>";
}
echo "<br>";
echo "-----------------------";
echo "<br>";

// cara penulisan yg lain (tidak umum, baru saya temukan sekarang)
for ($i = 0; $i < 10;) {
    echo $i . " ";
    // increment hanya contoh lain
    $i += 0.5;
}
echo "<br>";
echo "-----------------------";
echo "<br>";

// if didalam for
for ($j = 3; ($j < 10 && $j > 2); $j++) {
    // jika nilai $j habis dibagi dua (bilangan genap)
    if ($j % 2 == 0) {
        echo $j . " ";
    }
}
echo "<br>";
echo "-----------------------";
echo "<br>";

// while
// periksa dulu kondisinya, jika true maka perulangan akan berlanjut dan jika false maka perulangan akan berhenti
$x = 3;

while ($x < 10 && $x > 2) {
    // tampilkan bilangan genap
    // (($x % 2) == 0)
    // ((0) == 0)
    if ($x % 2 == 0) {
        echo $x . " ";
    }
    $x++;
}
echo "<br>";
echo "-----------------------";
echo "<br>";

// do while
// eksekusi perintah code dulu baru kemudian periksa kondisinya, jika true maka perulangan akan berlanjut dan jika false maka perulangan akan berhenti
$a = 2;

do {
    // hitung nilai pangkat 2
    echo $a . " ";
    $a *= $a;
} while ($a < 1000);
echo "<br>";
echo "-----------------------";
echo "<br>";

// loop for untuk array
$pecelLele = ["ayam", "bebek", "lele", "belut", "tahu", "tempe"];
var_dump($pecelLele);
echo "<br>";
echo "-----------------------";
echo "<br>";

// menggunakan looping for
for ($i = 0; $i < count($pecelLele) - 1; $i++) {
    echo "index ke-" . $i . " = " . $pecelLele[$i] . " ";
}
echo "<br>";
echo "-----------------------";
echo "<br>";

// menggunakan looping foreach (hanya khusus data array)
foreach ($pecelLele as $key => $value) {
    echo "index ke-" . $key . " = " . $value . " ";
}
echo "<br>";
echo "-----------------------";
echo "<br>";

// array assosiatif (simpelnya index berdasarkan kata pengganti)
$data = ["binatang" => "ayam", "tanaman" => "mangga"];
var_dump($data);

echo "<br>";
echo "-----------------------";
echo "<br>";

$dataSiswa = [
    "nama" => [
        "dani",
        "ahmad",
        "haikail",
        "maman"
    ],
    "umur" => [46, 30, 22, 17],
    "berat" => [45.5, 60.4, 77.6, 55.5]
];

// echo $dataSiswa["nama"][0];
// tampil pakai for
for ($i = 0; $i < count($dataSiswa); $i++) {
    // tolong hitung panjang array index "nama"
    for ($j = 0; $j < count($dataSiswa["nama"]); $j++) {
        echo $dataSiswa["nama"][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";
echo "-----------------------";
echo "<br>";

foreach ($dataSiswa as $k => $value) {
    echo $k . " ";
    foreach ($value as $key => $val) {
        echo $val . " ";
    }
    echo "<br>";
}
echo "<br>";
echo "-----------------------";
echo "<br>";

// contoh penggunakan continue dan break
for ($i = 1; $i <= 50; $i++) {
    if ($i % 10 === 0) {
        continue; # skip perulangan jika nilai $i habis dibagi 10
    }

    echo "Perulangan ke-{$i} <br>";

    if ($i > 40) {
        break; # hentikan perulangan jika $i lebih dari 40
    }
}
