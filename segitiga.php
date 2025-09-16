<?php
$alas = 12;
$tinggi = 8;
$luas = 0.5 * ($alas * $tinggi);
$sisi_miring = sqrt(pow($alas, 2) + pow($tinggi, 2));
$keliling = $alas + $tinggi + $sisi_miring;

echo "<h1>segitiga</h1>";
echo "<p>alas : $alas </p>";
echo "<p>tinggi : $tinggi </p>";
echo "<p>Luas  : $luas </p>";
echo "<p>Sisi Miring : " . round($sisi_miring, 2) . "</p>";
echo "<p>Keliling    : " . round($keliling, 2) . "</p>";
?>