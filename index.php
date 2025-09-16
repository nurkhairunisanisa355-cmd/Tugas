<?php
echo "<h1>Welcome My Class</h1>";
$nama_depan= "Nur";
$nama_belakang = "khairunnisa";
$nama_lengkap = $nama_depan . " " . $nama_belakang;
$nilai = "95";
$berat = "45,6";
$status = true;
echo  "<p>nama : $nama_lengkap</p>";
echo  "<p>nilai : $nilai</p>";
echo  "<p>berat : $berat</p>";
echo  "<p>status : $status</p>";

$nilaiA = rand(50, 100);
$nilaiB = rand(10, 100);

$jumlah = $nilaiA + $nilaiB;
$kurang = $nilaiA - $nilaiB;
$kali   = $nilaiA * $nilaiB;
$bagi   = $nilaiA / $nilaiB;

echo "<p>$nilaiA + $nilaiB = $jumlah</p>";
echo "<p>$nilaiA - $nilaiB = $kurang</p>";
echo "<p>Perkalian $kali</p>";
echo "<p>Pembagian $bagi</p>";
?>