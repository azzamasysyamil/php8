<?php
$hari = "Hujan";

if ($hari = "Hujan") {
    echo "Saya bawa payung";
  } 
echo "<hr>";

if ($hari = "Hujan") {
    echo "Saya bawa payung";
} else {
    echo "Saya tidak bawa payung";
}
echo "<hr>";

$nilai = 100 ;

if ($nilai >= 75 AND $nilai <= 100) {
    echo "Nilai anda $nilai, <b>Anda Lulus</b>";
} elseif ($nilai >= 0 AND $nilai < 50) {
    echo "Nilai anda $nilai, <b>Anda Belum Lulus</b>";
} elseif ($nilai >= 50 AND $nilai < 75) {
    echo "Nilai anda $nilai, <b>Anda Remedial</b>";
} else {
    echo "Nilai anda $nilai, <b>Buat apa?</b>";
}
echo "<hr>";

if ($nilai >= 91 AND $nilai <=100) :
    echo "Nilai Anda $nilai, nilai Anda A";
elseif ($nilai >= 83 AND $nilai < 91) :
    echo "Nilai Anda $nilai, nilai Anda B";
elseif ($nilai >=75 AND $nilai < 82) :
    echo "Nilai Anda $nilai, nilai Anda C";
elseif ($nilai >= 0 AND $nilai < 75) :
    echo "Nilai Anda $nilai, nilai Anda D";
else :
    echo "Nilai Anda $nilai, Tidak Ada Penilaian Seperti Ini";
endif;

echo "<hr>";

$cuaca = "Hujan";

if ($cuaca = "Hujan") {
    echo "Tidak Apel";
}
echo "<hr>";

$hasil = "A";

if ($hasil = "A") :
    echo "Istimewa";
elseif ($hasil = "B") :
    echo "Baik";
elseif ($hasil = "C") :
    echo "Cukup";
elseif ($hasil = "D") :
    echo "Kurang";
else :
    echo "Tidak ada";
endif;



?>