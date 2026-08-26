<?php
// Mengatur zona waktu agar sesuai dengan lokasi (misal: Asia/Jakarta)
date_default_timezone_set("Asia/Jakarta");

echo "<h2>Selamat Datang</h2>";

// Format tanggal: d = Tanggal, M = Singkatan Bulan, y = 2 digit Tahun, H:i = Jam:Menit, a = am/pm
echo "Hari Ini Tanggal : " . date("d M y H:i a");
?>