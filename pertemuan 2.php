<?php
// debugging adalah suatu cara untuk melakukan pengecekan data terlebih dahulu sebelum menjalankan program.
$nama = "Rama"; 
var_dump($nama);
echo"<br>";

print_r($nama);
echo"<br>";
// concatenation adalah penggabungan string. atay bisa juga dengan number yang di
// simpan kedalam varriable.

$nama_siswa = "Rendi";
$kelas = 12;
$rata_rata = 80.24;

$text = "Hai, saya " . $nama_siswa . ". Saya kelas $kelas dan nilai rata-rata saya $rata_rata";

echo $text;
echo "<br>";

// operator Assigment
// =, +=, -+, *=, /=, %=, .=

$x = 10;
$x -= 3;
echo $x;
echo "<br>";
echo "<br>";
// perbandingan adalah operator perbandingan digunakan untuk membandingkan sebuah number dengan number yang 
// lain, dan menghasilkan nilai boolean (true or false).
//    <, >, <=, >=, ==, !=
var_dump(1 ==1);
//  operator Logika
// ||, &&
echo "<br>";
echo "<br>";
var_dump(20 == 50 || 50 < 30);
?>      