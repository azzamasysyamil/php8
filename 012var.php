<?php
echo "<h3>Belajar Variabel</h3>";
$a1 = 10;
$a2 = 2;
echo "$a1 + $a2 = " . ($a1 + $a2) . "<br>";
echo "$a1 - $a2 = " . ($a1 - $a2) . "<br>";
echo "$a1 x $a2 = " . ($a1 * $a2) . "<br>";
echo "$a1 / $a2 = " . ($a1 / $a2) . "<br>";
echo "$a1 % $a2 = " . ($a1 % $a2) . "<br>";
echo "$a1 * 1/2 = " . ($a1 * 1 / 2) . "<br><br>";

# inisiasi dan inisialisasi variabel
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "<h3>Data Integer</h3>";
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";


echo "<h3>Data Boolean</h3>";
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

# hitung nilai rata-rata
$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

# Tampilkan data

echo "Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

# lihat tipe data dari variabel $rataRata
var_dump($rataRata);

echo "<h3>Data Boolean</h3>";
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaSudahUjian);


echo "<h3>Data String</h3>";
$namaDepan = "Zeob"; # pakai tanda petik dua
$namaBelakang = 'Sakka'; # pakai tanda petik satu

# menggabungkan dua variabel dengan tanda
# petik dua
$namaLengkap = "{$namaDepan} {$namaBelakang}";

# anda juga bisa menggabungkan string dengan menggunakan tanda titik (.)
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang;

# [Tampilkan Data]
# kita bisa memasukkan variabel lain jika menggunakan tanda petik dua
echo "Nama Depan: {$namaDepan} <br>"; 
# ada pun jika pakai tanda petik satu, kita tidak bisa memasukkan variabel 
# di dalam string akan tetapi menggabungkannya dengan operator titik (.)
echo 'Nama Belakang: ' . $namaBelakang . '<br>';

echo $namaLengkap;

echo "<h3>Data Array</h3>";
$siswa = ["Wahid Abdullah", "Elmo Bachtiar", "Lendis Fabri"];
echo '<pre>' , var_dump($siswa) , '</pre>';
echo $siswa[1]; // "Wahid Abdullah"\

echo "<br>";
$studentday = [
    ["A", "b", "c"],
    ["d", "e", "f"],
    ["g", "h", "i"],
];
echo $studentday[1][2]; 


echo "<br>";
echo '<pre>' , var_dump($studentday) , '</pre>';


echo "<h3>Array 2 Dimensi - Array Assosiatif</h3>";
$nilai = [
    "Jessica" => [
        "MTK" => 80,
        "PPKN" => 75,
        "Fisika" => 83,        
    ] ,   
    "Fairus" => [
        "MTK" => 80,
        "PPKN" => 75,
        "Fisika" => 83,        
    ] ,   
    "Jarel" => [
        "MTK" => 80,
        "PPKN" => 75,
        "Fisika" => 83,        
    ] ,   
];
echo '<pre>' , var_export($nilai, true). '</pre>';
echo "<br>";
echo $nilai["Jessica"]["MTK"];

?>