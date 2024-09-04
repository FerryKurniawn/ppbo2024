<?php
date_default_timezone_set("Asia/Jakarta");

$nama = readline('Masukkan nama Anda: ');
$waktu = date('H:i'); 
$jam = date('H');

if ($jam >= 5 && $jam < 11) {
    $sapaan = "Selamat pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat siang";
} elseif ($jam >= 15 && $jam < 19) {
    $sapaan = "Selamat sore";
} else {
    $sapaan = "Selamat malam";
}

echo "{$sapaan} {$nama}, sekarang pukul {$waktu}\n";