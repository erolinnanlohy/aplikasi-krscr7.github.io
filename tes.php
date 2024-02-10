<?php
$teksAwal = "erwindocr7";

// Hasilkan hash menggunakan password_hash()
$hashedTeks = password_hash($teksAwal, PASSWORD_DEFAULT);

// Tampilkan hash yang dihasilkan
echo "Teks Awal: $teksAwal<br>";
echo "Hashed: $hashedTeks";
?>
